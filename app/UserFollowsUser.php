<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowsUser extends Model
{
    protected $fillable = ['followed_id','follow_id'];
}
