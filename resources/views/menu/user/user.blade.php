@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <img class="rounded-circle fixed-center" height="200" src="{{$user->picture}}"><br>
    @if (Auth::id() == $user->id)
    <br>
    <a href="{{route('editUserPicture',$user->id)}}">
      <button class="btn btn-primary text-dark"><i class='bx bxs-edit'></i><b> Editar foto</b></button>
    </a>

    @endif
    <h1>{{$user->nick}}</h1>

    @if (Auth::id() == $user->id)
    <br>
    <a href="{{route('editUserNick',$user->id)}}"><button class="btn btn-primary text-dark"><i class='bx bxs-edit'></i><b> Editar apelido</b></button></a>

    @endif
    <hr class="divider">
    <h4><i class='bx bxs-user'></i> Nome: {{$user->full_name}}</h4><br>
    <h4><i class='bx bxs-envelope'></i> Email: {{$user->email}}</h4>
    <hr>

    <h1>Conteúdo:</h1><br>
    <h4><i class='bx bxs-pencil'></i> Tutoriais:</h4><br>
    <div class="row row-cols-4 row-cols-md-4 g-3">
        @foreach ($tutorials as $tutorial)
            <div class="col">
                <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
                    <img src="{{$tutorial->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px" >
                        <div class="align-self-center" style="width: 250px">
                          <h5><b>{{substr($tutorial->name,0,95)}}</b></h5>
                        </div>
                      </div>
                        <a href="{{route('tutorial',$tutorial->id)}}" class="btn btn-outline-primary">Acessar</a>
                    </div>
                </div>
            </div>
            @endforeach
          </div><br>

     

    <h4><i class='bx bxs-book'></i> Cursos:</h4><br>
    <div class="row row-cols-4 row-cols-md-4 g-3">
        @foreach ($courses as $course)
            <div class="col">
                <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
                    <img src="{{$course->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px" >
                          <div class="align-self-center" style="width: 250px">
                            <h5><b>{{substr($course->name,0,95)}}</b></h5>
                        </div>
                        </div>
                        <div><hr class="divider text-white"></div>
                        <p class="card-text  text-white mh-100" style="height: 100px">{{substr($course->description,0,125)}}</p>
                        <a href="{{route('course',$course->id)}}" class="btn btn-outline-primary">Acessar</a>
                    </div>
                </div>
            </div>
            @endforeach
            
          </div>
          <br>
    <h4><i class='bx bxs-book-content'></i> Módulos:</h4><br>
        
        <div class="row row-cols-4 row-cols-md-4 g-3">
        @foreach ($modules as $module)
            <div class="col">
                <div class="card bg-dark text-dark text-center shadow" style="width: 18rem; border-color: #000">
                    <img src="{{$module->thumbnail}} " height="200px" width="200px" class="card-img-top" alt="...">
                    <div class="card-body">
    
                      <div class="card-title text-white d-flex p-2 bd-highlight justify-content-center" style="height: 80px">
                        <div class="align-self-center" style="width: 250px">
                          <h5><b>{{substr($module->name,0,95)}}</b></h5>
                        </div>
                      </div>
                        <div><hr class="divider text-white"></div>
                        <p class="card-text text-white mh-100" style="height: 100px">{{substr($module->description,0,125)}}</p>
                        <a href="{{route('module',$module->id)}}" class="btn btn-outline-primary">Acessar</a>
                    </div>
                </div>
            </div>
            @endforeach
          </div>

   

</div>
@endsection