<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [//campos que o usuário poderá alterar
        'content_id','video','position',
    ];
    public $timestamps = false;

}
