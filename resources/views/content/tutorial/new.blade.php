@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >

    <form  method="post" action="{{route('postTutorial')}}" enctype="multipart/form-data">
        @csrf
        <h1 class="text-white">Criar tutorial</h1>
        <br><br><br>
        <div class="input-group mb-3 ">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-notepad' ></i>
            </span>
            <input type="text" name="name"  class="form-control bg-dark text-white" placeholder="Título" aria-label="Título" aria-describedby="basic-addon1" maxlength="100" required>
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                  <b>
                 Thumbnail</b>
            </span>
            <input type="file" name="thumb" class="form-control bg-dark text-white" placeholder="Thumbnail" aria-label="Thumbnail" aria-describedby="basic-addon2" required accept=".png,.jpg">
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text bg-primary text-dark" for="inputGroupSelect01"><b>Nível de dificuldade</b></label>
          <select name="level" class="form-select bg-dark text-white" id="inputGroupSelect01" required>
            <option selected>Escolher nível...</option>
            <option class="bg-dark text-white" value="1" for="quali1">Iniciante</option>
            <option class="bg-dark text-white" value="2" for="quali2">Intermediário</option>
            <option class="bg-dark text-white" value="3" for="quali3">Avançado</option>
          </select>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text bg-primary text-dark" for="inputGroupSelect01"><b>Categoria</b></label>
            <select name="subcategory" class="form-select bg-dark text-white" id="inputGroupSelect01" required>
              <option selected>Escolher subcategoria...</option>
              @foreach ($subcategories as $subcategory)
              <option class="bg-dark text-white" value="{{$subcategory->id}}" for="quali1">{{ucfirst($subcategory->category->id)}}: {{ucfirst($subcategory->id)}}</option>
              @endforeach
            </select>
          </div>  

        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary text-dark shadow"> 
            <b> 
                Criar tutorial 
            </b> 
        </button>
        </div>
      </form>
    </div>
@endsection