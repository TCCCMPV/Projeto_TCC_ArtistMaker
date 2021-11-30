<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function ShowCourse($id)
    {
        $modules = Content::where('content_id',$id)->where('couse_module')->get();
        
    }
}
