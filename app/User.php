<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
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
            DB::table('users')->insert([
                'name' => $dat['name'],
                'ic_number' => $dat['ic_number']
            ]);
            DB::table('user_type_district')->insert([
                'ic_number' => $dat['ic_number'],
                'deduct_amt' => $dat['deduct_amt']/100,
                'zakat_type' => $dat['zakat_type'],
                'district_code' => $dat['district_code']
            ]);
        }
    }
}
