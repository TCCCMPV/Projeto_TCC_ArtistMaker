<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaintImage extends Model
{
    protected $fillable = [
        'image', 'complaint_id',
    ];
}
