@extends('layouts.app')
@section('content')
<h1>{{$course->name}}</h1>
<img src="{{$course->thumbnail}}" width="400"><br>
<p>Criado por: <a href="{{route('user',$course->user_id)}}">{{$course->user->nick}}</a></p>
<p>
    {{$course->description}}
</p>
@auth
<a>Novo módulo</a>
@endauth
    @foreach ($modules as $module)
        <hr>
        <img src="{{$module->thumbnail}}"><br>
        <h1>{{$module->name}}</h1>
        <hr>
    @endforeach
@endsection