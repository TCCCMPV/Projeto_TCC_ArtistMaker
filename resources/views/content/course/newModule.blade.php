@extends('layouts.app')
@section('content')
    <form action="{{route('insertCourseModule',$id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Nome: </label><input name="name" type="text"><br>
        <label>Descrição: </label><textarea name="desc" cols="100" rows="3"></textarea><br>
        <label>Thumbnail: </label><input type="file" name="thumb"><br>
        <label>Posição: </label><input type="number" name="position"><br>
        <input type="submit">
    </form>
@endsection