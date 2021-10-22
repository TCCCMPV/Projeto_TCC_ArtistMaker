<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function ShowCourses()
    {
        $courses = Content::where('content_type_id','course')->get();
        return view('search.courses',['courses'=>$courses]);
    }
}
