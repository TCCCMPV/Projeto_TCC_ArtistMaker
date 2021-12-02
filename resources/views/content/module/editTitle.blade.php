@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
        <form id="title" action="{{route('putModuleTitle',$module->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
        </form>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bx-notepad' ></i>
            </span>
            <textarea class="form-control form-control bg-dark text-white" form="title" name="title"  placeholder="{{$module->name}}" aria-label="Título..." aria-describedby="basic-addon1" required maxlength="100">{{$module->name}}</textarea>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary text-dark" form="title" type="submit"><b>Enviar alterações</b> </button>
        </div>
</div>
<!--
    <form action="{{route('putModuleTitle',$module->id)}}" method="post">
        @method('PUT')
        @csrf
    <label>Título: </label><input name="title" type="text" placeholder="{{$module->name}}" value="{{$module->name}}">
    <input type="submit">
    </form>-->
@endsection