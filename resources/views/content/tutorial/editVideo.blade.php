@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('putTutorialVideo',$video->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Video: </label><input name="video" type="file"><br>
        <label>Posição: </label><input name="position" type="number" value="{{$video->position}}"><br>
        <input type="submit">
    </form>
@endsection