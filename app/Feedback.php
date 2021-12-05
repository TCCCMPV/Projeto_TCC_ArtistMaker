<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [ 
        'user_id', 'massage', 'feedback_type',
    ];
}