<?php

namespace App\Http\Controllers;

use App\Events\ClientActivated;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientPasswordSetupController extends Controller
{
    public function showSetupForm($token)
    {
        $client = Client::where('invitation_token', $token)
            ->where('invitation_expires_at', '>', now())
            ->first();

        if (! $client) {
            return redirect()->route('client.login')
                ->withErrors(['email' => 'This invitation link is invalid or has expired. Please request a new one.']);
        }

        return view('auth.clients.setup-password', compact('token'));
    }

    public function storePassword(Request $request, $token)
    {
        $client = Client::where('invitation_token', $token)
            ->where('invitation_expires_at', '>', now())
            ->first();

        if (! $client) {
            return redirect()->route('client.login')
                ->withErrors(['email' => 'This activation link is invalid or has expired. Please contact support.']);
        }

        $validated = $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $client->password = Hash::make($validated['password']);
        $client->invitation_token = null;
        $client->invitation_expires_at = null;
        $client->save();

        $project = $client->projects()->first();

        if ($project) {
            ClientActivated::dispatch($client, $project);
        }

        Auth::guard('client')->login($client);

        return redirect()->route('client.dashboard');
    }
}
