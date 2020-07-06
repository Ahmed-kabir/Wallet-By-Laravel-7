<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reffered extends Model
{
     protected $fillable = [
        'reffered_id', 'reffered_bonus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'reffered_id');
    }
}
