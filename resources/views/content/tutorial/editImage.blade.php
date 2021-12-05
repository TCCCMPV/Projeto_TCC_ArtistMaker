@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form id="image" action="{{route('putTutorialImage',$image->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- imagem atual --}}
        <div>
            <div class="input-group mb-3">
                <h1>Image atual:</h1>
            </div>
            <div class="input-group mb-3">
                <img width="400" src="{{$image->image}}">
            </div>
        </div>
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image'></i>
            </span>
            <input form="image" type="file" name="image" class="form-control bg-dark text-white"
                placeholder="Escolher arquivo" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png">
            <br>
        </div>
        {{-- submit --}}
        <div class="d-grid gap-2">
            <button class="btn btn-primary text-dark" form="image" type="submit">
                <b>Enviar alterações</b>
            </button>
        </div>
    </form>
</div>

@endsection