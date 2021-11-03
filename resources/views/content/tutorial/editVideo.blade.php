@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('putTutorialVideo',$video->id)}}">
        @csrf
        @method('PUT')
        <label>Video: </label><input name="video" type="file"><br>
        <label>Posição: </label><input name="position" type="number"><br>
        <input type="submit">
    </form>
@endsection