@extends('layouts.app')
@section('content')
    <form action="{{route('insertModuleTitle')}}" method="post">
        @csrf
    <label>Título: </label><input name="title" type="text" placeholder="{{$module->title}}" value="{{$module->title}}">
    <input type="submit">
    </form>
@endsection