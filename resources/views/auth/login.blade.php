<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <style> 
    html, body {
        background-image: url('https://www.ie.edu/insights/wp-content/uploads/2020/10/Hindi-Art-for-Busniness-Leaders.jpg');
                background-repeat: no-repeat;
                background-size: cover;
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
        @if (Route::has('register'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}"> <div><box-icon type='solid' name='home'></box-icon></div> Home</a>
                @else

                    <a href="{{ route('register') }}"> 
                        <button type="button" class="btn btn-outline-success shadow">
                            <b>
                                Cadastre-se 
                        </button>
                    </a>
                     
                    @if (Route::has('register'))
                    <a href="{{ url('/') }}"> 
                            <button class="btn btn-info text-dark shadow"> 
                                <b>
                                <i class='bx bx-arrow-back' ></i>
                                    Voltar ao início
                                </b>
                            </button> 
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    <br><br><br><br>
    <div class="container p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="text-white text-center">Login</h1>
        <br><br><br>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                  </svg>
            </span>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror bg-dark text-white" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-tooltip text-dark">
                Email ou senha inválidos
            </span>
        @enderror
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1"><i class='bx bxs-lock-alt' ></i></span>
            <input type="password" name="password" id="password" class="form-control bg-dark text-white @error('password') is-invalid @enderror"  placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1  required autocomplete="current-password">
            @error('password')
            <span class="invalid-tooltip text-dark" >
                Email ou senha inválidos
            </span>
        @enderror
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label text-white" for="remember">
              Lembrar de mim
            </label>
          </div>
          <div><hr class="divider text-white"></div>
        <div class="d-grid gap-2">
            @if (Route::has('password.request'))
                                    <a class="btn btn-danger text-dark shadow" href="{{ route('password.request') }}">
                                     <b> Esqueceu a senha? </b>   
                                    </a>
                                @endif
        <button type="submit" class="btn btn-primary text-dark shadow"> 
            <b> 
                Login 
            </b> 
        </button>
        </div>
      </form>
    </div>

</body>
</html>



<!--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

-->