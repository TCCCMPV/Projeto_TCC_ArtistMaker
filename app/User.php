<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nick','full_name','email','password','picture','local','language','suspension_beginning','suspension_end','rate','verified','especialist','birth','bio','email_verified_at',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
