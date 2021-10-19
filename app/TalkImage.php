<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalkImage extends Model
{
    protected $fillable = [
        'image', 'user_talks_user_id',
    ];

}
