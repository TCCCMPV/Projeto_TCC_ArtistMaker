@extends('layouts.app')
@section('content')
    <form action="{{route('insertText',$id)}}" method="POST">
        @csrf
        <label>Texto:</label>
        <textarea name="text"></textarea>
        <label>Position:</label>
        <input type="number" name="position">
        <input type="submit">
    </form>
@endsection