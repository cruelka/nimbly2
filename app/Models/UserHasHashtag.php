<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHasHashtag extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
