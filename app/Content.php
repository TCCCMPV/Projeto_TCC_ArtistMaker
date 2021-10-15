<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'tags','name','description','thumbnail','language','qualification_level','subcategory_id','content_type_id','position','content_id','user_id',
    ];
}
