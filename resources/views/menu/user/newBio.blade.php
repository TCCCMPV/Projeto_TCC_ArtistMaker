@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <form id="bio" action="{{route('insertTutorialBio',$id)}}" method="POST" enctype="multipart/form-data">
        @csrf
    </form>
    <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-dark" id="basic-addon2">
            <i class='bx bx-align-justify' ></i>
        </span>
    
        
        <textarea class="form-control form-control bg-dark text-white" form="bio" name="bio"  placeholder="Bio..." aria-label="Bio..." aria-describedby="basic-addon1" required maxlength="450"></textarea>
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text bg-primary text-dark" id="basic-addon1">
            <i class='bx bx-filter' ></i>
        </span>
        <input type="number" name="position" form="bio" class="form-control bg-dark text-white" placeholder="Posição" aria-label="Posição" aria-describedby="basic-addon1" min="1" required>
      
    </div>
    <div class="d-grid gap-2">
        <button class="btn btn-primary text-dark" form="bio" type="submit"><b>Enviar</b> </button>
    </div>
</div>