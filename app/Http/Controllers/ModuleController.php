<?php

namespace App\Http\Controllers;

use App\Content;
use App\ContentHasWidget;
use App\Comment;
use App\Subcategory;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{ 
    public function ShowModule($id)
    {
        $module = Content::where('id',$id)->where('content_type_id','module')->first();
        $comments = Comment::where('content_id',$id)->get();
        $contentHasWidgets = ContentHasWidget::where('content_id',$id)->get();
        return view('content.module.module',['module'=>$module,'comments'=>$comments,'contentHasWidgets'=>$contentHasWidgets]);
    }
    public function NewModule1()
    {
        $categories = Category::all();
        return view('content.module.new1',['categories'=>$categories]);
    }
    public function NewModule2(Request $request)
    {
        $module = new Content;
        $module->name = $request->input('name');
        $module->description = $request->input('description');
        $module->qualification_level = $request->input('level');
        $module->content_type_id = 'module';
        $module->user_id = Auth::id();
        if($request->file('thumb') != null)
        {
            $module->thumbnail = Storage::url($request->file('thumb')->store('/'.auth::id().'modules/thumbnails'));
        }
        else
        {
            $module->thumbnail = '/default/UnknownContent.png';
        }
        $module->save();
        $category = $request->input('category');
        $subcategories = Subcategory::where('category_id',$category)->get();
        $module = Content::where('name',$module->name)->where('description',$module->description)->where('user_id',$module->user_id)->first();
        $module_id = $module->id;

        return view('content.module.new2',['category'=>$category,'subcategories'=>$subcategories,'module_id'=>$module_id]);
    }
    public function PostModule(Request $request)
    {
        $module_id = $request->input('module_id');
        $module = Content::where('id',$module_id)->first();
        $module->subcategory_id = $request->input('subcategory');
        $module->save();
        return redirect()->route('module',$module_id);
    }
}

