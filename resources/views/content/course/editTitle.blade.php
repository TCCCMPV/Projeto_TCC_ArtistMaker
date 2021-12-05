@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
        <form id="title" action="{{route('putCourseTitle',$course->id)}}" method="post">
            @csrf
            @method('PUT')
            {{-- campo --}}
            <div class="input-group mb-3">
                <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                    <i class='bx bx-notepad' ></i>
                </span>
                <textarea class="form-control form-control bg-dark text-white" form="title" name="name"  placeholder="{{$course->name}}" aria-label="Título..." aria-describedby="basic-addon1" required maxlength="100">{{$course->name}}</textarea>
            </div>
            {{-- enviar --}}
            <div class="d-grid gap-2">
                <button class="btn btn-primary text-dark" form="title" type="submit"><b>Enviar alterações</b> </button>
            </div>
        </form>
</div>

@endsection