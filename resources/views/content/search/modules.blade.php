@extends('layouts.app')
@section('content')
    <h1>Modulos</h1>
    @auth
        <a href="{{route('newModule1')}}">Novo módulo</a>
    @endauth
@foreach ($modules as $module)
<div>
    <img src="{{$module->thumbnail}}" width="400px"><br>
    <a href="{{route('module',$module->id)}}">{{$module->name}}</a>|
    <a href="{{route('module',$module->user_id)}}">{{$module->user->nick}}</a>
    <hr>
</div>
@endforeach
@endsection