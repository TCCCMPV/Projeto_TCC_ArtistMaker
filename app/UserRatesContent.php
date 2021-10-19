<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRatesContent extends Model
{
    protected $fillable = [
        'user_id','content_id','avaliation',
    ];
}
