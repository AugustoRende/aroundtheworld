<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'lat', 'lng', 'src', 'type', 'title', 'description'
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
     * Get the user that owns the media.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
