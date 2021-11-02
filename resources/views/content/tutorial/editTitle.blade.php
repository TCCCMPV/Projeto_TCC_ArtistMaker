@extends('layouts.app')
@section('content')
    <form action="{{route('putTutorialTitle',$tutorial->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Título: </label><input type="text" name="title" value="{{$tutorial->name}}">
        <input type="submit">
    </form>
@endsection