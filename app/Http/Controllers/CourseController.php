<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use App\Subcategory;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    public function NewCourse()
    {
        $subcategories = Subcategory::all();
        $subcategories = $subcategories->sortBy('category_id');
        return view('content.course.new',['subcategories'=>$subcategories,'link'=>'create']);
    }
    public function ShowCourse($id)
    {
        $course = Content::where('id',$id)->where('content_type_id','course')->first();
        $comments = Comment::where('content_id',$id)->get();
        $modules = Content::where('content_id',$id)->where('content_type_id','course_module')->get();
        $modules = $modules->sortBy('position');
        return view('content.course.course',['course'=>$course,'modules'=>$modules,'link'=>'courses','comments'=>$comments]);
    }
    public function PostCourse(Request $request)
    {
        $course = new Content;
        $course->name = $request->input('name');
        $course->content_type_id = 'course';
        $course->subcategory_id = $request->input('subcategory');
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

    //modules
    public function NewModule($id)
    {
        $subcategories = Subcategory::all();
        return view('content.course.newModule',['id'=>$id,'link'=>'courses','subcategories'=>$subcategories]);
    }
    public function InsertModule(Request $request, $id)
    {
        $module = new Content;
        $module->name = $request->input('name');
        $module->description = $request->input('desc');
        if($request->has('thumb'))
        {
        $module->thumbnail = Storage::url($request->file('thumb')->store('/public/'.auth::id().'/Courses/'.$id));
        }
        else{
            $module->thumbnail = '/default/UnknownContent.png';
        }
        $module->position = $request->input('position');
        $module->content_type_id = 'course_module';
        $module->content_id = $id;
        $module->user_id = auth::id();
        $module->save();
        return redirect()->route('course',$id);
    }
}
