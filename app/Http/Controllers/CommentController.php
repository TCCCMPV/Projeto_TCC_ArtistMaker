<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Content;

class CommentController extends Controller
{
    public function InsertComment(Request $request, $id)
    {
        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->content_id = $id;
        $comment->comment = $request->input('text');
        $comment->save();

        $content = Content::where('id',$id)->first();

        if($content->content_type_id == 'tutorial')
        {
            return redirect()->route('tutorial',$id);
        }
        else if($content->content_type_id == 'module')
        {
            return redirect()->route('module',$id);
        }
    }
}
