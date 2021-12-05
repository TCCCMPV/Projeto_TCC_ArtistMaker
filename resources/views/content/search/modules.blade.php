@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
  <h1 class="mb-4"><i class='bx bxs-book-content'></i> Módulos</h1>
  <hr class="divider">
  {{-- seção modulos --}}
  <div class="row row-cols-4 row-cols-md-4 g-3">

    {{-- modulos --}}
    @foreach ($modules as $module)
    {{-- modulo --}}
    <div class="col">
      {{-- thumb, nome, descrição, acessar --}}
      <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
        {{-- thumb --}}
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
<br>
<br>
<br>

@endsection