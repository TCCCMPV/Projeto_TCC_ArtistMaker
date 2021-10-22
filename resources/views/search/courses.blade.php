@extends('layouts.app')
@section('content')
    <h1>Cursos</h1>
    @foreach ($courses as $course)
    <div>
        <img src="{{$course->thumbnail}}" width="600px"><br>
        <a href="{{route('course',$course->id)}}">{{$course->name}}</a>|
        <a href="{{route('course',$course->user_id)}}">{{$course->user->nick}}</a>
    </div>
@endforeach
@endsection