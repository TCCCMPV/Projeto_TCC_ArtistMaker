@extends('layouts.default')
@section('content')

<div class="container p-3 mb-5 mx-auto bg-dark rounded-3 border  shadow-lg" style="b">
  <h1 class="mb-4"><i class='bx bxs-pencil'></i> Tutoriais</h1>
  <hr class="divider">
  {{-- seção tutoriais --}}
  <div class="row row-cols-4 row-cols-md-4 g-3">
    {{-- tutoriais --}}
    @foreach ($tutorials as $tutorial)
    {{-- tutorial --}}
    <div class="col">
      {{-- thumb, nome, acessar --}}
      <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
        {{-- thumb --}}
        <img src="{{$tutorial->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
        {{-- nome, acessar --}}
        <div class="card-body">
          {{-- nome --}}
          <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px">
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
</div>
<br>
<br>
<br>

@endsection