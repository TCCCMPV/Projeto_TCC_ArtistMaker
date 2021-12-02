@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <form id="video" action="{{route('putTutorialVideo',$video->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    </form>
    <div class="input-group mb-3">
    <h1>Vídeo atual:</h1>
    </div>
    <div class="input-group mb-3">
    <video  class="video-fluid z-depth-1" controls preload="auto" width="400" src="{{$video->video}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-dark" id="basic-addon2">
            <i class='bx bxs-video' ></i>
        </span>    
        <input form="video" type="file" name="video" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required accept=".jpg, png"><br>
    </div>
    
    <div class="d-grid gap-2">
        <button class="btn btn-primary text-dark" form="video" type="submit"><b>Enviar alterações</b> </button>
    </div>
</div>


<!--
    <form method="post" action="{{route('putTutorialVideo',$video->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Video: </label><input name="video" type="file"><br>
        <label>Posição: </label><input name="position" type="number" value="{{$video->position}}"><br>
        <input type="submit">
    </form>-->
@endsection