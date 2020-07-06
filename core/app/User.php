<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //  protected $fillable = [
    //     'name', 'email', 'password','username',
    // ];
     protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function refferedUser()
    {
        return $this->hasMany('App\Reffered', 'reffered_id');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

    public function transferTransaction()
    {
        return $this->hasMany('App\Transaction', 'transferred_user_id');
    }
}
