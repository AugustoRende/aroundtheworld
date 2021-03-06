<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'lat', 'lng'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * Get the user that owns the checkpoint.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
