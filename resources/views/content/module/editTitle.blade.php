@extends('layouts.app')
@section('content')
    <form action="{{route('putModuleTitle',$module->id)}}" method="post">
        @method('PUT')
        @csrf
    <label>Título: </label><input name="title" type="text" placeholder="{{$module->name}}" value="{{$module->name}}">
    <input type="submit">
    </form>
@endsection