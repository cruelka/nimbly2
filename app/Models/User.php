<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $hidden = ['created_at', 'updated_at', 'password', 'email_verified_at', 'id'];
}
