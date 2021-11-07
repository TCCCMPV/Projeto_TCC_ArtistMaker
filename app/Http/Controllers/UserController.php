<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Content;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function ShowUser($id)
    {
        $user = User::where('id',$id)->first();
        $modules = Content::where('content_type_id', 'module')->where('user_id',$id)->get();
        $tutorials = Content::where('content_type_id', 'tutorial')->where('user_id',$id)->get();
        $courses = Content::where('content_type_id', 'course')->where('user_id',$id)->get();
        return view('menu.user.user',['user'=>$user,'modules'=>$modules,'courses'=>$courses,'tutorials'=>$tutorials]);
    }
}