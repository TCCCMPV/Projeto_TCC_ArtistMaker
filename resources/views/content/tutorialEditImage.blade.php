@extends('layouts.app')
@section('content')
<h1>Imagem atual:</h1>
<img src="{{$image->image}}">
<form enctype="multipart/form-data" action="{{route('putImage',$image->content_id)}}" method="post">
@csrf
    @method('put')
 <input type="file" name="image">
 <input type="number" name="position" value="{{$image->position}}">
 <input type="submit" name="enviar">       
</form>
@endsection