@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <form id="picture" action="{{route('putUserPicture',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    </form>
    <div class="input-group mb-3">
    <h1>Imagem atual:</h1>
    </div>
    <div class="input-group mb-3">
    <img width="400" src="{{$user->picture}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-dark" id="basic-addon2">
            <i class='bx bxs-user' ></i>
        </span>    
        <input form="picture" type="file" name="picture" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required accept=".jpg, png"><br>
    </div>
    
    <div class="d-grid gap-2">
        <button class="btn btn-primary text-dark" form="picture" type="submit"><b>Enviar alterações</b> </button>
    </div>
</div>