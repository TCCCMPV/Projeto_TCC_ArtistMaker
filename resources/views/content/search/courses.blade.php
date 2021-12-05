@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
  <h1 class="mb-4"><i class='bx bxs-book'></i> Cursos</h1>
  <hr class="divider">
  {{-- seção cursos --}}
  <div class="row row-cols-4 row-cols-md-4 g-3">

    {{-- curso --}}
    @foreach ($courses as $course)
    <div class="col">
      <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
        {{-- thumb --}}
        <img src="{{$course->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
        {{-- nome, descrição, acessar --}}
        <div class="card-body">
          {{-- nome --}}
          <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px">
            <div class="align-self-center" style="width: 250px">
              <h5><b>{{substr($course->name,0,95)}}</b></h5>
            </div>
          </div>
          <div>
            <hr class="divider text-white">
          </div>
          {{-- descrição --}}
          <p class="card-text  text-white mh-100" style="height: 100px">{{substr($course->description,0,125)}}</p>
          {{-- acessar --}}
          <a href="{{route('course',$course->id)}}" class="btn btn-outline-primary">Acessar</a>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
<br>
<br>
<br>

@endsection