<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $hidden = ['created_at', 'updated_at'];



    protected $guarded = ['id', 'user_id'];
}
