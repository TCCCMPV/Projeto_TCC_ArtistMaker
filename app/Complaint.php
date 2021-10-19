<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    protected $fillable = [
        'user_id', 'reported_object', 'complaint_type_id', 'description',
    ];
}
