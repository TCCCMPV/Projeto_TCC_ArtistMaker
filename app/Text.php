<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = [//campos que o usuário poderá alterar
        'text','content_id','position',
    ];
    public $timestamps = false;
}
