<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('menu.home',['link'=>'home','backgroundImage'=>true]);
    }
}
