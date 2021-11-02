@extends('layouts.app')
@section('content')
    <form action="{{route('insertTutorialImage',$id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image"><br>
        <label>Posição</label>
        <input type="number" name="position">
        <input type="submit">
    </form>
@endsection