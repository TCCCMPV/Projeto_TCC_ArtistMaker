<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist Maker</title>
    <link rel="shortcut icon" href="/default/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    {{-- se backgroundImage é falso (padrão falso) --}}
    @if (($backgroundImage ?? false ) == false)
    {{-- estilo sem background --}}
    <style>
      html,
      body {
        background-color: rgb(26, 26, 26);
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

    {{-- se backgroundoImage é verdadeiro (padrão falso) --}}
    @elseif ($backgroundImage == true)
    {{-- estilo com backgorund --}}
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
    @endif

  </head>

  <body>
    {{-- scripts bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- se navbar == true (padrão true) --}}
    @if(($navbar ?? true ) == true)
    {{-- menu --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow rounded-bottom">
      <div class="container-fluid">
        {{-- logo --}}
        <img src="/default/logo.png" height="20px" style="margin-right: 10px" alt="">
        {{-- nome --}}
        <a href="{{route('home')}}" class="navbar-brand"> Artist Maker</a>
        {{-- botão expandir menu --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        {{-- conteudo flexivel --}}
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          {{-- links --}}
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- home --}}
            <div>

              {{-- link é do home --}}
              @if (($link ?? '') == 'home')
              {{-- home ativo --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">
                  <i class='bx bxs-home'></i> Home
                </a>
              </li>

              {{-- link não é home --}}
              @else
              {{-- home desligado --}}
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">
                  <i class='bx bxs-home'></i> Home
                </a>
              </li>
              @endif

            </div>
            {{-- tutoriais --}}
            <div>
              {{-- link é tutorials --}}
              @if (($link ?? '') == 'tutorials')
              {{-- tutoriais ativo --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('searchTutorial')}}">
                  <i class='bx bxs-pencil'></i> Tutoriais
                </a>
              </li>

              {{-- link não é tutoriais --}}
              @else
              {{-- tutoriais desligado --}}
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('searchTutorial')}}">
                  <i class='bx bxs-pencil'></i> Tutoriais
                </a>
              </li>
              @endif

            </div>
            {{-- cursos --}}
            <div>

              {{-- link é cursos --}}
              @if ( ($link ?? '') == 'courses')
              {{-- cursos ativo --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('searchCourse')}}">
                  <i class='bx bxs-book'></i> Cursos
                </a>
              </li>

              {{-- link não é cursos --}}
              @else
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('searchCourse')}}">
                  <i class='bx bxs-book'></i> Cursos
                </a>
              </li>
              @endif

            </div>
            {{-- modulos --}}
            <div>

              {{-- link é modulos --}}
              @if (($link ?? '') == 'modules')
              {{-- modulos ativo --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('searchModule')}}">
                  <i class='bx bxs-book-content'></i> Módulos</a>
              </li>

              {{-- link não é modulos --}}
              @else
              {{-- modules desativo --}}
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('searchModule')}}">
                  <i class='bx bxs-book-content'></i> Módulos</a>
              </li>
              @endif

            </div>

            {{-- é authenticado --}}
            @auth
            {{-- criar --}}
            <li class="nav-item dropdown">

                {{-- link é criar --}}
                @if (($link ?? '') == 'create')
                {{-- criar ativo --}}
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bx bxs-plus-circle'></i> Criar
                </a>

                {{-- link não é criar --}}
                @else
                {{-- criar desligado --}}
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bx bxs-plus-circle'></i> Criar
                </a>
                @endif

              {{-- links dropdown --}}
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                {{-- criar tutorial --}}
                <li>
                  <a class="dropdown-item text-white" href="{{ route('newTutorial') }}">
                    <i class='bx bxs-pencil'></i> Criar Tutorial
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                {{-- criar curso --}}
                <li>
                  <a class="dropdown-item text-white" href="{{ route('newCourse') }}">
                    <i class='bx bxs-book'></i> Criar Curso
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                {{-- criar modulo --}}
                <li>
                  <a class="dropdown-item text-white" href="{{ route('newModule') }}">
                    <i class='bx bxs-book-content'></i> Criar Módulo
                  </a>
                </li>
              </ul>
            </li>
            @endauth

            {{-- é authenticado --}}
            @auth
            {{-- user --}}
            <li class="nav-item dropdown">
              {{-- botão dropdown --}}

                {{-- link é user --}}
                @if (($link ?? '') == 'user')
                {{-- user ativo --}}
                <a class="nav-link active dropdown-toggle" href="{{ route('user', Auth::id()) }}"
                  id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bx bxs-user'></i> {{auth::user()->nick}}
                </a>

                {{-- link não é user --}}
                @else
                {{-- user desligado --}}
                <a class="nav-link dropdown-toggle" href="{{ route('user', Auth::id()) }}"
                  id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bx bxs-user'></i> {{auth::user()->nick}}
                </a>
                @endif

              {{-- links --}}
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                {{-- perfil --}}
                <li>
                  <a class="dropdown-item text-white" href="{{ route('user', Auth::id()) }}">
                    Ir para o perfil
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                {{-- logout --}}
                <li>
                  <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>

            {{-- não é authenticado --}}
            @else
            {{-- user --}}
            <li class="nav-item dropdown">
              {{-- botão dropdown --}}
              <div>

                {{-- link é user --}}
                @if (($link ?? '') == 'user')
                {{-- user ativo --}}
                <a class="nav-link active dropdown-toggle" href="{{ route('register')}}" id="navbarDarkDropdownMenuLink"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bx bxs-user'></i> Visitante
                </a>

                {{-- link não é user --}}
                @else
                {{-- user desligado --}}
                <a class="nav-link dropdown-toggle" href="{{ route('register')}}" id="navbarDarkDropdownMenuLink"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bx bxs-user'></i> Visitante
                </a>
                @endif

              </div>
              {{-- links --}}
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                {{-- cadastrar --}}
                <li>
                  <a class="dropdown-item text-white" href="{{ route('register') }}">
                    Cadastrar
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                {{-- login --}}
                <li>
                  <a class="dropdown-item text-white" href="{{ route('login') }}">Login</a>
                </li>
              </ul>
            </li>
            @endauth

          </ul>
        </div>
      </div>
    </nav>
    <br>
    @endif

      @yield('content')
  </body>

</html>