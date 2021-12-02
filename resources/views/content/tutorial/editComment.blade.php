@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <form id="comment" action="{{route('putTutorialComment',$comment->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
    </form>
    <div class="input-group mb-3">
        <span class="input-group-comment bg-primary text-dark" id="basic-addon2">
            <i class='bx bx-align-justify'></i>
        </span>
        <textarea class="form-control form-control bg-dark text-white" form="comment" name="comment"  placeholder="{{$comment->comment}}" aria-label="Título..." aria-describedby="basic-addon1" required maxlength="100">{{$comment->comment}}</textarea>
    </div>
    <div class="d-grid gap-2">
        <button class="btn btn-primary text-dark" form="comment" type="submit"><b>Enviar alterações</b> </button>
    </div>
</div>


@endsection