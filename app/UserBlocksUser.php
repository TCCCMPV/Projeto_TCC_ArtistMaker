<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBlocksUser extends Model
{
    protected $fillable = [
        'blocker_id', 'blocked_id',
    ];
}
