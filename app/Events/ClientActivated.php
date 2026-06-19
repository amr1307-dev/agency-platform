<?php

namespace App\Events;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Foundation\Events\Dispatchable;

class ClientActivated
{
    use Dispatchable;

    public Client $client;
    public Project $project;

    public function __construct(Client $client, Project $project)
    {
        $this->client = $client;
        $this->project = $project;
    }
}
