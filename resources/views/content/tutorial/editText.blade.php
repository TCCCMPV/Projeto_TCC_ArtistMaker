@extends('layouts.app')
@section('content')
    <form action="{{route('putTutorialText',$text->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="text" >
        <input type="submit" name="enviar">
    </form>
@endsection