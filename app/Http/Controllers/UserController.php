<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function ShowUser($id)
    {
        $user = User::where('id',$id)->first();
        $modules = Content::where('content_type_id', 'module')->where('user_id',$id)->get();
        $tutorials = Content::where('content_type_id', 'tutorial')->where('user_id',$id)->get();
        $courses = Content::where('content_type_id', 'course')->where('user_id',$id)->get();
        return view('menu.user.user',['user'=>$user,'modules'=>$modules,'courses'=>$courses,'tutorials'=>$tutorials,'link'=>'user']);
    }
    public function EditPicture($id)
    {
        $user = User::where('id',$id)->first();
        return view('menu.user.editPicture',['$id'=>$id,'link'=>'user','user'=>$user]);
    }
    public function PutPicture(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->picture = Storage::url($request->file('picture')->store('/public/'.auth::id()));
        $user->save();
        return redirect()->route('user',$id);
    }
    public function EditNick($id)
    {
        $user = User::where('id',$id)->first();
        return view('menu.user.editNick',['id'=>$id,'link'=>'user']);
    }
    public function PutNick(Request $request, $id)
    {
        $user = User::where('id',$id)->first();
        $user->nick = $request->input('nick');
        $user->save();
        return redirect()->route('user',$id);
    }
}