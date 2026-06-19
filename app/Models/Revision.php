<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'deliverable_id', 'client_request', 'user_response', 'status',
    ];

    public function deliverable()
    {
        return $this->belongsTo(Deliverable::class);
    }
}
