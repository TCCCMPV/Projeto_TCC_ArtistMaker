<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'tags','name','description','thumbnail','language','qualification_level','subcategory_id','content_type_id','position','content_id','user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function images()
    {
        return $this->hasMany('App\Image');
    }
    public function texts()
    {
        return $this->hasMany('App\Text');
    }
    public function videos()
    {
        return $this->hasMany('App\Video');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function content()
    {
        return $this->belongsTo('App\Content');
    }
}
