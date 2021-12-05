@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
  {{-- imagem --}}
  <img class="rounded-circle fixed-center" height="200" src="{{$user->picture}}">
  <br>

  {{-- é o dono --}}
  @if (Auth::id() == $user->id)
  <br>
  {{-- editar foto --}}
  <a class="btn btn-primary text-dark" role="button" href="{{route('editUserPicture',$user->id)}}">
    <i class='bx bxs-edit'></i><b> Editar foto</b>
  </a>
  @endif

  {{-- nick --}}
  <h1>{{$user->nick}}</h1>

  {{-- é o dono --}}
  @if (Auth::id() == $user->id)
  <br>
  <a class="btn btn-primary text-dark" role="button" href="{{route('editUserNick',$user->id)}}">
    <i class='bx bxs-edit'></i><b>Editar apelido</b>
  </a>
  @endif

  <hr class="divider">
  {{-- dados --}}
  <div>
    {{-- nome --}}
    <h4><i class='bx bxs-user'></i> Nome: {{$user->full_name}}</h4>
    <br>
    {{-- email --}}
    <h4><i class='bx bxs-envelope'></i> Email: {{$user->email}}</h4>
  </div>
  <hr>
  {{-- conteudos --}}
  <div>
    <h1>Conteúdo:</h1><br>
    <h4><i class='bx bxs-pencil'></i> Tutoriais:</h4><br>
    {{-- tutoriais --}}
    <div class="row row-cols-4 row-cols-md-4 g-3">

      @foreach ($tutorials as $tutorial)
      {{-- tutorial --}}
      <div class="col">
        <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
          {{-- imagem --}}}
          <img src="{{$tutorial->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
          {{-- nome, acessar --}}
          <div class="card-body">
            <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px">
              {{-- nome --}}
              <div class="align-self-center" style="width: 250px">
                <h5><b>{{substr($tutorial->name,0,95)}}</b></h5>
              </div>
            </div>
            {{-- acessar --}}
            <a href="{{route('tutorial',$tutorial->id)}}" class="btn btn-outline-primary">Acessar</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    <br>
    <h4><i class='bx bxs-book'></i> Cursos:</h4>
    <br>
    {{-- cursos --}}
    <div class="row row-cols-4 row-cols-md-4 g-3">

      @foreach ($courses as $course)
      {{-- curso --}}
      <div class="col">
        <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
          {{-- imagem --}}
          <img src="{{$course->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
          {{-- nome. descrição, acessar --}}
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
    <br>
    <h4><i class='bx bxs-book-content'></i> Módulos:</h4>
    <br>
    {{-- modulos --}}
    <div class="row row-cols-4 row-cols-md-4 g-3">
      
      @foreach ($modules as $module)
      {{-- modulo --}}
      <div class="col">
        <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
          {{-- imagem --}}
          <img src="{{$module->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
          {{-- nome, descrição, acessar --}}
          <div class="card-body">
            {{-- nome --}}
            <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px">
              <div class="align-self-center" style="width: 250px">
                <h5><b>{{substr($module->name,0,95)}}</b></h5>
              </div>
            </div>
            <div>
              <hr class="divider text-white">
            </div>
            {{-- descrição --}}
            <p class="card-text text-white mh-100" style="height: 100px">{{substr($module->description,0,125)}}</p>
            {{-- acessar --}}
            <a href="{{route('module',$module->id)}}" class="btn btn-outline-primary">Acessar</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endsection