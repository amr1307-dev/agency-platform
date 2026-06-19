<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use App\Models\Deliverable;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProjects = Project::count();
        $thisWeekProjects = Project::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $inProgressCount = Project::where('status', 'in_progress')->count();
        $deliveredCount = Project::where('status', 'delivered')->count();
        $recentProjects = Project::with('client')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProjects',
            'thisWeekProjects',
            'inProgressCount',
            'deliveredCount',
            'recentProjects'
        ));
    }

    public function projects(Request $request)
    {
        $query = Project::with('client');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $projects = $query->latest()->paginate(15);

        return view('admin.projects', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = Project::with(['client', 'deliverables', 'revisions'])->findOrFail($id);

        return view('admin.project-detail', compact('project'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:received,in_progress,review,delivered,archived',
        ]);

        $project = Project::findOrFail($id);
        $project->status = $request->status;
        $project->save();

        return redirect()->back()->with('success', 'Project status updated successfully.');
    }

    public function updateNotes(Request $request, $id)
    {
        $request->validate([
            'notes' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);
        $project->internal_notes = $request->notes;
        $project->save();

        return redirect()->back()->with('success', 'Internal notes updated successfully.');
    }

    public function addDeliverable(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'notes' => 'nullable',
        ]);

        $project = Project::findOrFail($id);

        $deliverable = new Deliverable();
        $deliverable->project_id = $id;
        $deliverable->title = $request->title;
        $deliverable->notes = $request->notes;
        $deliverable->file_path = 'manual-delivery';
        $deliverable->type = 'link';
        $deliverable->save();

        return redirect()->back()->with('success', 'Deliverable added successfully.');
    }

    public function clients()
    {
        $clients = Client::withCount('projects')->latest()->paginate(15);

        return view('admin.clients', compact('clients'));
    }

    public function clientDetail($id)
    {
        $client = Client::with('projects')->findOrFail($id);

        return view('admin.client-detail', compact('client'));
    }
}
