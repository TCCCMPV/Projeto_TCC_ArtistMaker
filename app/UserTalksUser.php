<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTalksUser extends Model
{
    protected $fillable = [
        'seeder_id', 'receiver_id', 'massage', 'seen',
    ];
}
