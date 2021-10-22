@extends('layouts.app')
    @section('content')
        <h1>Tutoriais</h1>
        <a href="{{route('newTutorial')}}">Criar novo tutorial</a>
        @foreach ($tutorials as $tutorial)
        <div>
        <img src="{{$tutorial->thumbnail}}" width="400px"><br>
        <a href="{{route('tutorial',$tutorial->id)}}">{{$tutorial->name}}</a> |
        <a href="{{route('tutorial',$tutorial->user_id)}}">{{$tutorial->user->nick}}</a>
        <hr>
        </div>
    @endforeach
@endsection