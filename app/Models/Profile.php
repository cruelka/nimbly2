<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded=['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function getSexAttribute($value)
    {
        return $value ? 'Male' : 'Female';
    }
}
