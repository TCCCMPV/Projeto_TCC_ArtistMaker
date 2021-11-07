@extends('layouts.app')
@section('content')
    <form action="{{route('insertTutorialText',$id)}}" method="POST">
        @csrf
        <label>Texto:</label>
        <textarea name="text"></textarea><br>
        <label>Posição:</label>
        <input type="number" name="position"><br>
        <input type="submit">
    </form>
@endsection