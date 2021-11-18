@extends('layouts.app')
@section('content')
    <form action="{{route('newModuleWidget2',$id)}}" method="POST">
        @csrf
        @foreach ($widgets as $widget)
        <label>{{$widget->name}}</label><input type="radio" name="widget" value="{{$widget->id}}"><br>
        @endforeach
        <input type="submit" value="Escolher">
    </form>
@endsection