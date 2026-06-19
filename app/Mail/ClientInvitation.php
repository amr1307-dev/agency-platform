<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientInvitation extends Mailable
{
    use Queueable, SerializesModels;

    public Client $client;
    public string $setupUrl;

    public function __construct(Client $client, string $setupUrl)
    {
        $this->client = $client;
        $this->setupUrl = $setupUrl;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Red Sea Digital Pro Account — Set Your Password',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.client-invitation',
        );
    }
}
