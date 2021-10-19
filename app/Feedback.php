<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [ 
        'user_id', 'massage', 'feedback_type',
    ];
}
/*
protected $fillable = [
    'nick','full_name','email','password','picture','local','language','suspension_beginning','suspension_end','rate','verified','especialist','birth','bio','email_verified_at',
];
protected $hidden = [
    'password', 'remember_token',
];*/