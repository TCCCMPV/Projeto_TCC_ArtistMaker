<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentHasWidget extends Model
{
    protected $fillable = [
        'widget_id','content_id','content',
    ];
}
