<?php

namespace App;

use http\Exception\RuntimeException;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;
     protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password','status','image','created_at','updated_at'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
