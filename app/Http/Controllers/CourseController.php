<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    public function NewCourse()
    {
        $categories = Category::all();
        return view('content.course.new',['categories'=>$categories]);
    }
    public function ShowCourse($id)
    {
        $course = Content::where('id',$id)->where('content_type_id','course')->first();
        
        $modules = Content::where('content_id',$id)->where('content_type_id','course_module')->get();
        $modules = $modules->sortBy('position');
        return view('content.course.course',['course'=>$course,'modules'=>$modules]);
    }
    public function PostCourse(Request $request)
    {
        $course = new Content;
        $course->name = $request->input('name');
        $course->content_type_id = 'course';
        $course->description = $request->input('desc');
        if ($request->has('thumb')) {
            $course->thumbnail = Storage::url($request->file('thumb')->store('/public/'.Auth::id().'/courses/thumbnails'));
        }
        else{
            $course->thumbnail = '/default/UnknownContent.png';
        }
        $course->qualification_level = $request->input('level');
        $course->user_id = Auth::id();
        $course->save();
        return redirect()->route('user',Auth::id());
        
    }
}
