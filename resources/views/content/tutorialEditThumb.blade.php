@extends('layouts.app')
@section('content')
    <h1>Imagem antiga:</h1>
    <img width="400" src="{{$tutorial->thumbnail}}"><br>
    <form action="{{route('putTutorialThumb',$tutorial->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" name="thumb">
        <input type="submit">
    </form>
@endsection