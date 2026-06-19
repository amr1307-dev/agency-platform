<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'client_id', 'title', 'service_type', 'brief_text',
        'budget_range', 'timeline', 'status', 'internal_notes',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function deliverables()
    {
        return $this->hasMany(Deliverable::class);
    }

    public function revisions()
    {
        return $this->hasManyThrough(Revision::class, Deliverable::class);
    }

    public function tasks()
    {
        return $this->hasMany(ProjectTask::class);
    }
}
