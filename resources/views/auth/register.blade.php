
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
//////////////////////////////////////////////////////////////////
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <title>Cadastro</title>

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
            <div class="top-right links">
               
                    <a href="{{ url('/') }}"> 
                            <button class="btn btn-info text-dark shadow"> 
                                <b>
                                    <i class='bx bx-arrow-back' >
                                    </i>
                                    Voltar ao início
                            </button> 
                        </a>
            </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container p-3 mb-5 mx-auto bg-dark rounded-3 text-center border border-primary shadow-lg">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="text-white">Cadastro</h1>
        <br><br><br>
        <div class="input-group mb-3 ">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bxs-user' >
                </i>
            </span>
            <input type="text" name="name" id="name" class="form-control bg-dark text-white" placeholder="Nome completo" aria-label="Nome completo" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bxs-id-card' >
                </i>
            </span>
            <input type="text" name="nick" id="nick" class="form-control bg-dark text-white" placeholder="Apelido" aria-label="Apelido" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-envelope' ></i>
            </span>
            <input type="email" name="email" id="email" class="form-control bg-dark text-white" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" >
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-lock-alt' >
                </i>
            </span>
            <input type="password" name="password" id="password" class="form-control bg-dark text-white" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 ">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bxs-lock-alt' >
                </i>
            </span>
            <input type="password" name="password-confirm" id="password-confirm" class="form-control bg-dark text-white" placeholder="Confirmar senha" aria-label="Confirmar senha" aria-describedby="basic-addon1">
          </div>

          <div>
              <hr class="divider text-white">
          </div>
          
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary text-dark shadow"> 
            <b> 
                Cadastrar 
            </b> 
        </button>
        </div>
      </form>
    </div>
    <div class="container p-3 mb-5 mx-auto bg-dark rounded-3 text-center border border-primary shadow-lg">
        <h6 class="text-white">Já possui conta? Faça login <a href="{{ route('login') }}" class="link-primary">aqui.</a></h6>
    </div>

</body>
</html>