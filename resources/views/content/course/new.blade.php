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
</body>

</html>

{{-- <div class="dropdown">
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
</div> --}}
{{-- <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
    <select class="form-select" id="inputGroupSelect01">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div> --}}
