<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'company', 'email', 'whatsapp', 'password',
        'invitation_token', 'invitation_expires_at', 'referral',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
