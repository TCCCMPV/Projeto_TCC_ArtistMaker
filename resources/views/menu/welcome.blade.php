<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

        <title>Artist Maker</title>


        <!-- Styles -->
        <style>
            html, body {
                background-image: url('https://www.ie.edu/insights/wp-content/uploads/2020/10/Hindi-Art-for-Busniness-Leaders.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"> <div><box-icon type='solid' name='home'></box-icon></div> Home</a>
                    @else

                        <a href="{{ route('login') }}"> 
                            <button type="button" class="btn btn-outline-primary shadow">
                                <i class='bx bx-log-in' >
                                </i> 
                                <b>
                                    Login 
                                <b>
                            </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button class="btn btn-success shadow text-dark"> 
                                    <b>
                                        Cadastre-se
                                    </b> 
                                </button> 
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Artist Maker
                </div>

                <div class="links">
                    <a href="{{route('searchTutorial')}}"> 
                        <button class="btn btn-primary shadow"> 
                            <i class='bx bxs-pencil' >
                                </i>  
                                <b> 
                                    Tutoriais 
                                </b> 
                        </button> 
                    </a>
                    <a href="{{route('searchCourse')}}"> 
                        <button class="btn btn-primary shadow"> 
                            <i class='bx bxs-book'>
                            </i>  
                            <b> 
                                Cursos 
                            </b> 
                        </button> 
                    </a>
                    <a href="{{route('searchModule')}}"> 
                        <button class="btn btn-primary shadow"> 
                            <i class='bx bxs-book-content'>
                            </i> 
                            <b> 
                                Módulos 
                            </b> 
                        </button> 
                    </a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
