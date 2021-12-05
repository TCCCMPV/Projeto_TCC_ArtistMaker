@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form id="thumb" action="{{route('putModuleThumb',$module->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- thumbnail atual --}}
        <div>
            <div class="input-group mb-3">
                <h1>Thumbnail atual:</h1>
            </div>
            <div class="input-group mb-3">
                <img width="400" src="{{$module->thumbnail}}">
            </div>
        </div>
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image'></i>
            </span>
            <input form="thumb" type="file" name="thumb" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png"><br>
        </div>
        {{-- submit --}}
        <div class="d-grid gap-2">
            <button class="btn btn-primary text-dark" form="thumb" type="submit"><b>Enviar alterações</b> </button>
        </div>
    </form>
</div>


<!--
    <form action="{{route('putModuleThumb',$module->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <h1>Antiga thumb: <img src="{{$module->thumbnail}}"></h1>
        <label>Thumbnail: </label><input name="thumb" type="file"><br>
        <input type="submit">
    </form>-->
@endsection