<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentImage extends Model
{
    protected $fillable = [
        'image', 'comment_id',
    ];
}
