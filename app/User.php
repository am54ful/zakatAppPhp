<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  static  function add($data){
        foreach ($data as $dat){
            $user = new User;
            $user->name = $dat['name'];
            $user->ic_number = $dat['ic_number'];
            $user->zakat_type= $dat['zakat_type'];
            $user->deduct_amt= $dat['deduct_amt']/100;
            $user->district_code= $dat['district_code'];
            $user->save();
        }

    }
}
