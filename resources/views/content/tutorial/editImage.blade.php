@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <form id="image" action="{{route('putTutorialImage',$image->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    </form>
    <div class="input-group mb-3">
    <h1>Image atual:</h1>
    </div>
    <div class="input-group mb-3">
    <img width="400" src="{{$image->image}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-dark" id="basic-addon2">
            <i class='bx bxs-image' ></i>
        </span>    
        <input form="image" type="file" name="image" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required accept=".jpg, png"><br>
    </div>
    
    <div class="d-grid gap-2">
        <button class="btn btn-primary text-dark" form="image" type="submit"><b>Enviar alterações</b> </button>
    </div>
</div>
<!--
    <h1>Imagem atual:</h1><br>
    <img src="{{ $image->image }}" width="200"><br>
    <form enctype="multipart/form-data" action="{{ route('putTutorialImage', $image->id) }}" method="post">
        @csrf
        @method('put')
        <label>Imagem: </label><input type="file" name="image"><br>
        <label>Posição: </label><input type="number" name="position" value="{{ $image->position }}"><br>
        <input type="submit" name="enviar">
    </form>-->
@endsection
