<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

  <style>
    html,
    body {
      background-image: url('https://www.ie.edu/insights/wp-content/uploads/2020/10/Hindi-Art-for-Busniness-Leaders.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      color: #ffffff;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow rounded-bottom">
  <div class="container-fluid">
    <img src="/default/logo.png" height="20px" style="margin-right: 10px" alt="">
    <a href="{{route('home')}}" class="navbar-brand"> Artist Maker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
      aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          @if ($link == 'home')
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">
            @else
            <a class="nav-link" aria-current="page" href="{{route('home')}}">
              @endif

              <i class='bx bxs-home'></i>
              Home</a>
        </li>
        <li class="nav-item">
          @if ($link == 'tutorials')
          <a class="nav-link active" aria-current="page" href="{{route('searchTutorial')}}">
            @else
            <a class="nav-link" aria-current="page" href="{{route('searchTutorial')}}">
              @endif
              <i class='bx bxs-pencil'>
              </i>
              Tutoriais
            </a>
        </li>
        <li class="nav-item">
          @if ($link == 'searchCourse')
          <a class="nav-link active" aria-current="page" href="{{route('searchCourse')}}">
            @else
            <a class="nav-link" aria-current="page" href="{{route('searchCourse')}}">
              @endif

              <i class='bx bxs-book'>
              </i>
              Cursos</a>
        </li>
        <li class="nav-item">
          @if ($link == 'modules')
          <a class="nav-link active" aria-current="page" href="{{route('searchModule')}}">
            @else
            <a class="nav-link" aria-current="page" href="{{route('searchModule')}}">
              @endif
              <i class='bx bxs-book-content'>
              </i>
              Módulos</a>
        </li>

        @auth

        <li class="nav-item dropdown">
          @if ($link == 'create')
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            @else
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              @endif
              <i class='bx bxs-plus-circle'></i>
              Criar
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="{{ route('newTutorial') }}"><i class='bx bxs-pencil'></i>
                  Criar Tutorial</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-white" href="{{ route('newCourse') }}"><i class='bx bxs-book'></i>
                  Criar Curso</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-white" href="{{ route('newModule') }}"><i
                    class='bx bxs-book-content'></i> Criar Módulo</a></li>
            </ul>
        </li>
        @endauth
        @auth
        <li class="nav-item dropdown">
          @if ($link == 'user')
          <a class="nav-link active dropdown-toggle" href="{{ route('user', Auth::id()) }}"
            id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @else
            <a class="nav-link dropdown-toggle" href="{{ route('user', Auth::id()) }}" id="navbarDarkDropdownMenuLink"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @endif

              <i class='bx bxs-user'></i>
              {{auth::user()->nick}}

            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="{{ route('user', Auth::id()) }}">Ir para o perfil</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          @if ($link == 'user')
          <a class="nav-link active dropdown-toggle" href="{{ route('register')}}" id="navbarDarkDropdownMenuLink"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @else
            <a class="nav-link dropdown-toggle" href="{{ route('register')}}" id="navbarDarkDropdownMenuLink"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @endif

              <i class='bx bxs-user'></i>
              Visitante

            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="{{ route('register') }}">Cadastrar</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-white" href="{{ route('login') }}">Login</a></li>
        </li>
      </ul>
      </li>
      @endauth
      </ul>


      <form class="d-flex">
        <input class="form-control rounded-pill me-2 text-white border-primary" style="background-color: #000033"
          type="search" placeholder="Pesquisar.." aria-label="Pesquisar">
        <button class="btn text-dark btn-primary rounded-circle" type="submit"><b><i
              class='bx bx-search'></i></b></button>
      </form>
    </div>
  </div>
</nav>  

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="content">
    <div class="title m-b-md" style="font-family: 'Nunito', sans-serif; font-weight: 200; ">
     
<h2 class="text-center  text-break fs-2 fw-bold ">
        {!!nl2br('“Mais importante do que a obra de arte propriamente dita é o que ela vai gerar.
        A arte pode morrer; um quadro desaparecer.
        O que conta é a semente.”
        – Joan Miró')!!}
      </h2>
     
      
    </div>
  </div>
</body>

</html>