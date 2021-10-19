<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserViewsContent extends Model
{
    protected $fillable = [
        'user_id','content_id','visualization','completed','deleted',
];

}
