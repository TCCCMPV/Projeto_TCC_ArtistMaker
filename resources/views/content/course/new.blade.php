@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >

    <form  method="post" action="{{route('postCourse')}}" enctype="multipart/form-data">
        @csrf
        <h1 class="text-white">Criar curso</h1>
        <br><br><br>
        <div class="input-group mb-3 ">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-notepad' ></i>
            </span>
            <input type="text" name="name"  class="form-control bg-dark text-white" placeholder="Título" aria-label="Título" aria-describedby="basic-addon1" maxlength="100" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-align-justify'></i>
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="desc"  placeholder="Descrição" aria-label="Descrição" aria-describedby="basic-addon1" required maxlength="450"></textarea>
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
              <option class="bg-dark text-white" value="{{$subcategory->id}}" for="quali1"><b>{{$subcategory->category->id}}</b>: {{$subcategory->id}}</option>
              @endforeach
            </select>
          </div>  

        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary text-dark shadow"> 
            <b> 
                Criar curso 
            </b> 
        </button>
        </div>
      </form>
    </div>
 {{--   
<form method="post" action="{{route('postCourse')}}" enctype="multipart/form-data">
    @csrf
    <label>Nome: </label><input type="text" name="name" ><br>
    <label>Descrição: </label><br>
    <textarea name="desc" cols="100" rows="3"></textarea><br>
    <label>Thumbnail: </label><input type="file" name="thumb"><br>
    <label>Nível de qualificação:</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="level" value="1" id="quali1"><label class="form-check-label" for="quali1">Iniciante</label><br>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="level" value="2" id="quali2"><label class="form-check-label" for="quali2">Intermediário</label><br>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="level" value="3" id="quali3"><label class="form-check-label" for="quali3">Avançado</label>
    </div>
    <br>
    @foreach ($categories as $category)
        <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton2"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ $category->id }}
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                @foreach ($category->subcategories as $subcategory)
                    <li class="dropdown-button">
                        <input class="form-check-input" id="{{ $subcategory->id }}" type="radio" name="subcategory"
                            value="{{ $subcategory->id }}">
                        <label class="form-check-label" for="{{ $subcategory->id }}">{{ $subcategory->id }}</label>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
    <input type="submit">
</form>
</div>--}}





{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

 <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
    data-bs-toggle="dropdown" aria-expanded="false">
    Matheus Agroboy
</button>
<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
</ul>
</div>
 <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
    <select class="form-select" id="inputGroupSelect01">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div> --}}
@endsection