@extends('layouts.app')
@section('content')
    <form action="{{route('insertVideo',$id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="video"><br>
        <label>Posição</label>
        <input type="number" name="position">
        <input type="submit">
    </form>
@endsection