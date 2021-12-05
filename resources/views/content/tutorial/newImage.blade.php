@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form id="image" action="{{route('insertTutorialImage',$id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input form="image" type="file" name="image" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png"><br>
        </div>
        {{-- posição --}}
        <div class="input-group mb-3 ">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-filter'></i>
            </span>
            <input type="number" name="position" form="image" class="form-control bg-dark text-white"
                placeholder="Posição" aria-label="Posição" aria-describedby="basic-addon1" min="1" required>

        </div>
        {{-- submit --}}
        <div class="d-grid gap-2">
            <button class="btn btn-primary text-dark" form="image" type="submit"><b>Enviar</b> </button>
        </div>
    </form>
</div>

@endsection