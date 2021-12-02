@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">

  <form method="post" action="{{route('insertCourseModule',$id)}}" enctype="multipart/form-data">
    @csrf
    <h1 class="text-white">Criar Módulo de curso</h1>
    <br><br><br>
    <div class="input-group mb-3 ">
      <span class="input-group-text bg-primary text-dark" id="basic-addon1">
        <i class='bx bx-notepad'></i>
      </span>
      <input type="text" name="name" class="form-control bg-dark text-white" placeholder="Título" aria-label="Título"
        aria-describedby="basic-addon1" maxlength="100" required>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text bg-primary text-dark" id="basic-addon1">
        <i class='bx bx-align-justify'></i>
      </span>
      <textarea class="form-control form-control bg-dark text-white" name="desc" placeholder="Descrição"
        aria-label="Descrição" aria-describedby="basic-addon1" required maxlength="500"></textarea>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text bg-primary text-dark" id="basic-addon2">
        <b>
          Thumbnail</b>
      </span>
      <input type="file" name="thumb" class="form-control bg-dark text-white" placeholder="Thumbnail"
        aria-label="Thumbnail" aria-describedby="basic-addon2" required accept=".png,.jpg">
    </div>

    <div class="input-group mb-3 ">
      <span class="input-group-text bg-primary text-dark" id="basic-addon1">
        <i class='bx bx-filter'></i>
      </span>
      <input type="number" name="position" form="image" class="form-control bg-dark text-white" placeholder="Posição"
        aria-label="Posição" aria-describedby="basic-addon1" min="1" required>

    </div>



    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary text-dark shadow">
        <b>
          Criar módulo de curso
        </b>
      </button>
    </div>
  </form>
</div>
@endsection