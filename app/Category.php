<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $incrementing = false;
    
    protected $keyType = 'string';

    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }

}