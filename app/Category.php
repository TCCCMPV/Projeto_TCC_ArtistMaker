<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
}


/*
    public $incrementing = false;//não autoincrement
    
    protected $keyType = 'string';//tipo varchar

    protected $fillable = [//campos que o usuário poderá alterar
        'name', 'email', 'password',
    ];
    protected $hidden = [//campos que o laravel não poderá mostrar
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',//timestamp para datetime
    ];


    protected $fillable = [];

*/