<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    public $incrementing = false;//não autoincrement
    
    protected $keyType = 'string';//tipo varchar
}
