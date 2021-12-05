<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    public $incrementing = false;
    
    protected $keyType = 'string';
    
    protected $fillable = [
        'notification_type', 'user_id', 'massage', 'seen', 'deleted',
    ];
}
