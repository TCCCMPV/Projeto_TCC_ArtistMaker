<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image', 'content_id', 'legend', 'position'
    ];
    
    public $timestamps = false;
}
