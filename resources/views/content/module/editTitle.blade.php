@extends('layouts.app')
@section('content')
    <form action="{{route('insertModuleTitle',$module->id)}}" method="post">
        @csrf
    <label>Título: </label><input name="title" type="text" placeholder="{{$module->name}}" value="{{$module->name}}">
    <input type="submit">
    </form>
@endsection