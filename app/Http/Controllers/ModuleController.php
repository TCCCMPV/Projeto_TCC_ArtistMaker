<?php

namespace App\Http\Controllers;

use App\Content;
use App\ContentHasWidget;
use App\Comment;
use Illuminate\Http\Request;

class ModuleController extends Controller
{ 
    public function ShowModule($id)
    {
        $module = Content::where('id',$id)->first();
        $comments = Comment::where('content_id',$id)->get();
        $contentHasWidgets = ContentHasWidget::where('content_id',$id)->get();
        return view('content.module.module',['module'=>$module,'comments'=>$comments,'contentHasWidgets'=>$contentHasWidgets]);
    }
}

