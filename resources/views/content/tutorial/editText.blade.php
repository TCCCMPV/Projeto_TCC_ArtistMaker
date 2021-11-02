@extends('layouts.app')
@section('content')
    <form action="{{route('putTutorialText',$text->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Texto: </label><br>
        <textarea name="text">{{$text->text}}</textarea><br>
        <input type="submit" name="enviar">
    </form>
@endsection