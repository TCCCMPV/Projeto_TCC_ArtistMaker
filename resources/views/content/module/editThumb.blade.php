@extends('layouts.app')
@section('content')
    <form action="{{route('insertModuleThumb',$module->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Antiga thumb: <img src="{{$module->thumbnail}}"></h1>
        <label>Thumbnail: </label><input name="thumb" type="file"><br>
        <input type="submit">
    </form>
@endsection