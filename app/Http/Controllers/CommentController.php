<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Content;

class CommentController extends Controller
{
    public function InsertComment(Request $request, $id)
    {
        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->comment = $request->input('text');
        $comment->save();
        return redirect()->route('tutorial',$id);
    }
}
