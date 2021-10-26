@extends('layouts.app')
@section('content')
    <form action="{{route('editTuturialTitle',$id)}} method="post"">
        @csrf
        @method('PUT')
        <input type="text" name="title">
        <input type="submit">
    </form>
@endsection