@extends('layouts.default')
@section('content')
<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg" >
    <img class="rounded-circle fixed-center" height="200" src="{{$user->picture}}"><h1>{{$user->nick}}</h1><br>
    <hr class="divider">
    <h4><i class='bx bxs-user' ></i> Nome: {{$user->full_name}}</h4><br>
    <h4><i class='bx bxs-envelope' ></i> Email: {{$user->email}}</h4><br>
    <h4><i class='bx bxs-info-circle' ></i> Biografia: </h4><br>
    <p>{{$user->bio}}</p><br>
    
    <hr>
    
    <h1>Conteúdo:</h1><br>
    <h4><i class='bx bxs-pencil' ></i>  Tutoriais:</h4><br>
    @foreach ($tutorials as $tutorial )
    <a href="{{route('tutorial',$tutorial->id)}}">{{$tutorial->name}}</a><br>
    @endforeach<br>
    <h4><i class='bx bxs-book'></i> Cursos:</h4><br>
    @foreach ($courses as $course )
    <a href="{{route('course', $course->id)}}">{{$course->name}}</a><br>
    @endforeach<br>
    <h4><i class='bx bxs-book-content'></i> Módulos:</h4><br>
    @foreach ($modules as $module )
    <a href="{{route('module',$module->id)}}">{{$module->name}}</a><br>
    @endforeach<br>

</div>
@endsection


