<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLikesDrawing extends Model
{
    protected $fillable = [
        'user_id','drawing_id',
    ];

}
