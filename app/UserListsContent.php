<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserListsContent extends Model
{
    protected $fillable = [
        'user_id', 'content_id', 'position',
    ];
}
