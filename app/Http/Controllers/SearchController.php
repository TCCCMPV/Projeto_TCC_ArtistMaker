<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class SearchController extends Controller
{
    public function ShowTutorials()
    {
        $tutorials = Content::where('content_type_id','tutorial')->get();

        return view('content.search.tutorials',['tutorials'=>$tutorials,'link'=>'tutorials']);
    }
    public function ShowModules()
    {
        $modules = Content::where('content_type_id','module')->get();

        return view('content.search.modules',['modules'=>$modules,'link'=>'modules']);
    }
    public function ShowCourses()
    {
        $courses = Content::where('content_type_id','course')->get();
        
        return view('content.search.courses',['courses'=>$courses,'link'=>'courses']);
    }
}
