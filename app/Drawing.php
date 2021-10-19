<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawing extends Model
{
    protected $fillable = [
        'image','user_id','public','show_likes',
    ];

}
