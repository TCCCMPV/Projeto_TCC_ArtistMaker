<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentHasWidget extends Model
{
    protected $fillable = [
        'widget_id','content_id','position','text1','text2','text3','src1','src2','src3','alt1','alt2','alt3',
    ];
    public function widget()
    {
        return $this->belongsTo('App\Widget');
    }
}
