<?php

namespace App\Http\Controllers;

use App\Content;
use App\ContentHasWidget;
use App\Comment;
use App\Subcategory;
use App\Category;
use App\Widget;
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
            $module->thumbnail = Storage::url($request->file('thumb')->store('public/'.auth::id().'/modules/thumbnails'));
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

    //edits

    public function EditTitle($id)
    {
        $module = Content::where('id',$id)->first();
        return view('content.module.editTitle',['id'=>$id,'module'=>$module]);
    }
    public function PutTitle(Request $request, $id)
    {
        $module = Content::where('id',$id)->first();
        $module->name = $request->input('title');
        $module->save();
        return redirect()->route('module',$id);
    }

    public function EditThumb ($id)
    {
        $module = Content::where('id',$id)->first();
        return view('content.module.editThumb',['module'=>$module]);
    }
    public function PutThumb(Request $request, $id)
    {
        if($request->has('thumb'))
        {
            $module = Content::where('id',$id)->first();
            $module->thumbnail = Storage::url($request->file('thumb')->store('/public/'.auth::id().'/modules/'.$module->id));
            $module->save();
        }
        return redirect()->route('module',$id);
    }
    public function EditDesc($id)
    {
        $module = Content::where('id',$id)->first();
        return view('content.module.editDesc',['module'=>$module]);
    }
    public function PutDesc(Request $request, $id)
    {
        $module = Content::where('id',$id)->first();
        $module->description = $request->input('desc');
        $module->save();
        return redirect()->route('module',$id);
    }

    //widgets
    public function NewWidget1($id)
    {
        $widgets = Widget::all();
        return view('content.module.newWidget1',['id'=>$id,'widgets'=>$widgets]);
    }
    public function NewWidget2(Request $request, $id)
    {
        $widget = $request->input('widget');
        return view('content.module.newWidget2',['widget'=>$widget,'id'=>$id]);
    }
    public function InsertWidget(Request $request, $id)
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
        return redirect()->route('module',$id);
    }
    public function DeleteWidget($id)
    {
        $contentHasWidget = ContentHasWidget::where('id',$id)->first();
        $id = $contentHasWidget->content_id;
        $contentHasWidget->delete();
        return redirect()->route('module',$id);
    }
}
