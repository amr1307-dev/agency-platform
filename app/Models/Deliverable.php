<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliverable extends Model
{
    protected $fillable = [
        'project_id', 'title', 'file_path', 'type', 'notes',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function revisions()
    {
        return $this->hasMany(Revision::class);
    }
}
