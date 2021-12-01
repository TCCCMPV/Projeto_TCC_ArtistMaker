<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <style>
        html, body {
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

        .links > a {
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow rounded-bottom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Artist Maker</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <i class='bx bxs-home' ></i>  
                    Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-pencil' >
                    </i> 
                    Tutoriais
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item text-white" href="{{ route('searchTutorial') }}" >Tutoriais</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white" href="#">MEDO</a></li>
                    <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                    <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                  </ul>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-book'>
                    </i>
                  Cursos
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item text-white" href="{{ route('searchCourse') }}" >Cursos</a></li>
                  <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white" href="#">Action</a></li>
                  <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                  <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-book-content'>
                    </i> 
                 Módulos
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item text-white" href="{{ route('searchModule') }}" >Módulos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white" href="#">Action</a></li>
                    <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                    <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ route('user', Auth::id()) }}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      
                          <i class='bx bxs-user'></i>  
                          {{auth::user()->nick}} 
                       
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item text-white" href="{{ route('user', Auth::id()) }}">Ir para o perfil</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
   {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST"
   class="d-none">
   @csrf
</form></li>
                    </ul>
                  </li>
            </ul>
            
            
            <form class="d-flex">
              <input class="form-control rounded-pill me-2 text-white border-primary" style="background-color: #000033" type="search" placeholder="Pesquisar.." aria-label="Pesquisar">
              <button class="btn text-dark btn-primary rounded-circle" type="submit"><b><i class='bx bx-search'></i></b></button>
            </form>
            
            
            <!--  <a href="{{ route('user', Auth::id()) }}">
                <button style="margin: 9px" type="submit" class="btn btn-success text-dark shadow"> 
                    <b> 
                        <i class='bx bxs-user-circle'></i>  
                        {{auth::user()->nick}} 
                    </b> 
                    
                </button>
            </a>
            
            <button style="margin: 9px" type="submit" class="btn btn-outline-danger shadow"> 
                <b> 
                            <i class='bx bx-log-out' ></i>
                        </b> 
                        
                    </button>
                    
                -->
            </div>
        </div>
    </nav>
    
    
    <!--
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand"> <b>Artist Maker</b> </a>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('searchTutorial')}}">Tutoriais</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{route('searchCourse')}}">Cursos</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{route('searchModule')}}">Módulos</a>
                </li>
                
                <form class="d-flex">
                    <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Pesquisar..." aria-label="Pesquisar">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
            
        </nav>
    -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
    <div class="content">
        <div class="title m-b-md" style="font-family: 'Nunito', sans-serif; font-weight: 200; ">
            INSERIR FRASE AQUI
        </div>
    </div>
</body>
</html>







