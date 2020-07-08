<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //  protected $fillable = [
    //     'transferred_user_id', 'transfer_ammount','transfer_charge',
    // ];
    protected $guarded = [];
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
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

   
    // public function receiverName()
    // {
    //      return $this->belongsTo('App\User', 'transferred_user_id');
    // }

    public function interestReceiverName()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
