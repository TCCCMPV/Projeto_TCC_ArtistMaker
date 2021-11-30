<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $incrementing = false;//não autoincrement
    protected $keyType = 'string';//tipo varchar
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
