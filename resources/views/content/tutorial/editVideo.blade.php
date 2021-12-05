@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form id="video" action="{{route('putTutorialVideo',$video->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- video atual --}}
        <div>
            <div class="input-group mb-3">
                <h1>Vídeo atual:</h1>
            </div>
            <div class="input-group mb-3">
                <video class="video-fluid z-depth-1" controls preload="auto" width="400" src="{{$video->video}}">
            </div>
        </div>
        {{-- video --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video'></i>
            </span>
            <input form="video" type="file" name="video" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png"><br>
        </div>
        {{-- submit --}}
        <div class="d-grid gap-2">
            <button class="btn btn-primary text-dark" form="video" type="submit"><b>Enviar alterações</b> </button>
        </div>
    </form>
</div>

@endsection