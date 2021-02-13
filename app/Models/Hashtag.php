<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hashtag
 * @package App\Models
 */
class Hashtag extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
