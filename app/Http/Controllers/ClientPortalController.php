<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientPortalController extends Controller
{
    public function login()
    {
        return view('client.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('client')->attempt($credentials)) {
            return redirect()->route('client.dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('apply');
    }

    public function dashboard()
    {
        $client = Auth::guard('client')->user();
        $projects = Project::where('client_id', $client->id)->with('tasks')->get();
        return view('client.dashboard', compact('projects'));
    }

    public function approveTask(Request $request, $taskId)
    {
        $client = Auth::guard('client')->user();

        $task = ProjectTask::whereHas('project', function ($q) use ($client) {
            $q->where('client_id', $client->id);
        })->findOrFail($taskId);

        if ($task->status !== 'under_review') {
            return redirect()->back()->withErrors(['task' => 'This task is not currently under review.']);
        }

        $task->status = 'approved';
        $task->save();

        $nextTask = ProjectTask::where('project_id', $task->project_id)
            ->where('sort_order', $task->sort_order + 1)
            ->first();

        if ($nextTask && $nextTask->status === 'pending') {
            $nextTask->status = 'in_progress';
            $nextTask->save();
        }

        return redirect()->back()->with('success', 'Milestone approved successfully! Moving to the next stage.');
    }

    public function requestRevision(Request $request, $taskId)
    {
        $client = Auth::guard('client')->user();

        $task = ProjectTask::whereHas('project', function ($q) use ($client) {
            $q->where('client_id', $client->id);
        })->findOrFail($taskId);

        if ($task->status !== 'under_review') {
            return redirect()->back()->withErrors(['task' => 'This task is not currently under review.']);
        }

        $validated = $request->validate([
            'revision_notes' => 'required|string|min:10',
        ]);

        $task->status = 'revision_requested';
        $task->revision_notes = $validated['revision_notes'];
        $task->save();

        return redirect()->back()->with('success', 'Your revision request has been submitted. The team will review your feedback.');
    }
}
