<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use App\Subcategory;
use App\ContentHasWidget;
use App\Comment;
use App\Widget;
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
    public function Delete($id)
    {
        $course = Content::where('id',$id)->first();
        $course->delete();
        return redirect()->route('user',auth::id());
    }

    //edits

    public function EditTitle($id)
    {
        $course = Content::where('id',$id)->first();
        return view('content.course.editTitle',['link'=>'courses','$id'=>$id,'course'=>$course]);
    }
    public function PutTitle(Request $request, $id)
    {
        $course = Content::where('id',$id)->first();
        $course->name = $request->input('name');
        $course->save();
        return redirect()->route('course',$id);
    }
    public function EditThumb($id)
    {
        $course = Content::where('id',$id)->first();
        return view('content.course.editThumb',['id'=>$id,'link'=>'courses','course'=>$course]);
    }
    public function PutThumb(Request $request, $id)
    {
        $course = Content::where('id',$id)->first();
        $course->thumbnail = Storage::url($request->file('thumb')->store('public/'.auth::id().'/courses/thumbnails'));
        $course->save();
        return redirect()->route('course',$id);
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
    public function ShowModule($id)
    {
        $contentHasWidgets = ContentHasWidget::where('content_id',$id)->get();
        $module = Content::where('id',$id)->first();
        $comments = Comment::where('content_id',$id)->get();
        $contentHasWidgets = $contentHasWidgets->sortBy('position');
        return view('content.course.module',['link'=>'courses','module'=>$module,'contentHasWidgets'=>$contentHasWidgets,'comments'=>$comments]);
    }
    public function DeleteModule($id)
    {
        $course = Content::where('id',$id)->first();
        $course_id = $course->content_id;
        $course->delete();
        return redirect()->route('course',$course_id);
    }

    //edit module

    public function EditModuleTitle($id)
    {
        $module = Content::where('id',$id)->first();
        return view('content.course.editModuleTitle',['id'=>$id, 'module'=>$module, 'link'=>'courses']);
    }
    public function PutModuleTitle(Request $request, $id)
    {
        $module = Content::where('id',$id)->first();
        $module->name = $request->input('title');
        $module->save();
        return redirect()->route('moduleCourse',$id);
    }
    public function EditModuleDesc($id)
    {
        $module = Content::where('id',$id)->first();
        return view('content.course.editModuleDesc',['module'=>$module,'link'=>'courses']);
    }
    public function PutModuleDesc(Request $request, $id)
    {
        $module = Content::where('id',$id)->first();
        $module->description = $request->input('desc');
        $module->save();
        return redirect()->route('moduleCourse',$id);
    }
    public function EditModuleThumb ($id)
    {
        $module = Content::where('id',$id)->first();
        return view('content.course.editModuleThumb',['module'=>$module,'link'=>'modules']);
    }
    public function PutModuleThumb(Request $request, $id)
    {
        if($request->has('thumb'))
        {
            $module = Content::where('id',$id)->first();
            $module->thumbnail = Storage::url($request->file('thumb')->store('/public/'.auth::id().'/modules/'.$module->id));
            $module->save();
        }
        return redirect()->route('moduleCourse',$id);
    }

    //widgets
    public function NewModuleWidget1($id)
    {
        $widgets = Widget::all();
        return view('content.course.newModuleWidget1',['id'=>$id,'widgets'=>$widgets,'link'=>'modules']);
    }
    public function NewModuleWidget2(Request $request, $id)
    {
        $widget = $request->input('widget');
        return view('content.course.newModuleWidget2',['widget'=>$widget,'id'=>$id,'link'=>'modules']);
    }
    public function InsertModuleWidget(Request $request, $id)
    {
        $widget = $request->input('widget');
        $contentHasWidgets = new ContentHasWidget;
        if($request->has('text1'))
        {
            $contentHasWidgets->text1 = $request->input('text1');
        }
        if($request->has('text2'))
        {
            $contentHasWidgets->text2 = $request->input('text2');
        }
        if($request->has('text3'))
        {   
            $contentHasWidgets->text3 = $request->input('text3');
        }
        if($request->has('alt1'))
        {
            $contentHasWidgets->alt1 = $request->input('alt1');
        }
        if($request->has('alt2'))
        {
            $contentHasWidgets->alt2 = $request->input('alt2');
        }
        if($request->has('alt3'))
        {
            $contentHasWidgets->alt3 = $request->input('alt3');
        }
        if($request->has('src1'))
        {
            $contentHasWidgets->src1 = Storage::url($request->file('src1')->store('/public/'.auth::id().'/modules/'.$id));
        }
        if($request->has('src2'))
        {
            $contentHasWidgets->src2 = Storage::url($request->file('src2')->store('/public/'.auth::id().'/modules/'.$id));
        }
        if($request->has('src3'))
        {
            $contentHasWidgets->src3 = Storage::url($request->file('src3')->store('/public/'.auth::id().'/modules/'.$id));
        }
        $contentHasWidgets->widget_id = $widget;
        $contentHasWidgets->position = $request->input('position');
        $contentHasWidgets->content_id = $id;
        $contentHasWidgets->save();
        return redirect()->route('moduleCourse',$id);
    }
    public function DeleteModuleWidget($id)
    {
        $contentHasWidget = ContentHasWidget::where('id',$id)->first();
        $id = $contentHasWidget->content_id;
        $contentHasWidget->delete();
        return redirect()->route('module',$id);
    }
}
