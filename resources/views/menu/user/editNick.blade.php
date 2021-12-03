@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <form id="bio" action="{{route('putUserNick',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    </form>
    <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-dark" id="basic-addon2">
            <i class='bx bxs-user' ></i>
        </span>
    
        
        <textarea class="form-control form-control bg-dark text-white" form="bio" name="nick"  placeholder="{{$user->nick}}" aria-label="{{$user->nick}}" aria-describedby="basic-addon1" required maxlength="450">{{$user->nick}}</textarea>
    </div>
    <div class="d-grid gap-2">
        <button class="btn btn-primary text-dark" form="bio" type="submit"><b>Enviar alterações</b> </button>
    </div>
</div>
@endsection