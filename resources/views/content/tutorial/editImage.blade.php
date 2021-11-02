@extends('layouts.app')
@section('content')
    <h1>Imagem atual:</h1><br>
    <img src="{{ $image->image }}" width="200"><br>
    <form enctype="multipart/form-data" action="{{ route('putTutorialImage', $image->id) }}" method="post">
        @csrf
        @method('put')
        <label>Imagem: </label><input type="file" name="image"><br>
        <label>Posição: </label><input type="number" name="position" value="{{ $image->position }}"><br>
        <input type="submit" name="enviar">
    </form>
@endsection
