<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens, Notifiable;

    protected $hidden = ['created_at', 'updated_at', 'password', 'email_verified_at',];

    public function profile()
    {
        return $this->hasOne('App\Models\Profile', 'user_id');
    }

    public function hui()
    {
       echo 1;
    }
}
