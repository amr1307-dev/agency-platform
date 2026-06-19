<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Project;
use App\Mail\ClientInvitation;
use App\Mail\AdminProjectNotification;

class ClientController extends Controller
{
    public function create()
    {
        return view('apply');
    }

    public function store(Request $request)
    {
        $request->merge([
            'brief'  => $request->input('brief', $request->input('brief_text')),
            'budget' => $request->input('budget', $request->input('budget_range')),
        ]);

        $validated = $request->validate([
            'name'         => 'required|string',
            'email'        => 'required|email',
            'company'      => 'nullable|string',
            'whatsapp'     => 'nullable|string',
            'service_type' => 'required|in:website_branding,marketing,ai_systems',
            'brief'        => 'required|string',
            'budget'       => 'nullable|string',
            'timeline'     => 'nullable|string',
            'referral'     => 'nullable|string',
        ]);

        $token = Str::random(60);

        try {
            $client = Client::create([
                'name'                  => $validated['name'],
                'email'                 => $validated['email'],
                'company'               => $validated['company'],
                'whatsapp'              => $validated['whatsapp'],
                'referral'              => $validated['referral'],
                'password'              => bcrypt(Str::random(80)),
                'invitation_token'      => $token,
                'invitation_expires_at' => now()->addHours(48),
            ]);
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['email' => 'This email is already registered. Please check your inbox for your invitation link or proceed to login.']);
            }

            throw $e;
        }

        Project::create([
            'client_id'    => $client->id,
            'title'        => $validated['service_type'] . ' - ' . $client->name,
            'service_type' => $validated['service_type'],
            'brief_text'   => $validated['brief'],
            'budget_range' => $validated['budget'],
            'timeline'     => $validated['timeline'],
            'status'       => 'received',
        ]);

        $setupUrl = url('/client/setup-password/' . $token);

        Mail::to($client->email)->send(new ClientInvitation($client, $setupUrl));

        Mail::to('admin@redseadigitalpro.com')->send(new AdminProjectNotification([
            'name'         => $client->name,
            'email'        => $client->email,
            'company'      => $client->company,
            'whatsapp'     => $client->whatsapp,
            'service_type' => $validated['service_type'],
            'budget'       => $validated['budget'],
            'timeline'     => $validated['timeline'],
            'brief'        => $validated['brief'],
        ]));

        return redirect()->back()->with('success', 'Application submitted successfully! Please check your email to activate your account and set your password.');
    }
}
