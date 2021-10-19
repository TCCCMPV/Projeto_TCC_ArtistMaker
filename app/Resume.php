<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    protected $fillable = [
        'user_id', 'description', 'archive',
    ];
}
