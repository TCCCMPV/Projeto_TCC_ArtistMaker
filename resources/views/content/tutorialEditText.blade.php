@extends('layouts.app')
@section('content')
    <form action="{{route('editText',$id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="text">
        <input type="submit">
    </form>
@endsection