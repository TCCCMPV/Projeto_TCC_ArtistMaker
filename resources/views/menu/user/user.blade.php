@extends('layouts.app')
@section('content')


<h1>Nick:{{$user->nick}}</h1><br>
<h1>Nome:{{$user->full_name}}</h1><br>
<img src="{{$user->picture}}"><br>
<h1>Email:{{$user->email}}</h1><br>
<h1>Localidade:{{$user->local}}</h1><br>
<h1>Linguagem:{{$user->language}}</h1><br>
<h1>Nível:{{$user->level}}</h1><br>
<h1>Avaliação:{{$user->rate}}</h1><br>
<h1>Verificado:{{$user->especialist}}</h1><br>
<h1>Especialista:{{$user->especialist}}</h1><br>
<h1>Idade:{{$user->birth}}</h1><br>
<h1>Biografia:</h1><br>
<p>{{$user->bio}}</p><br>

<hr>

<h1>Conteúdo:</h1><br>
<h2>Tutoriais:</h1><br>
@foreach ($tutorials as $tutorial )
<a href="{{route('tutorial',$tutorial->id)}}">{{$tutorial->name}}</a><br>
@endforeach<br>
<h2>Cursos:</h1><br>
@foreach ($courses as $course )
<a href="{{route('course', $course->id)}}">{{$course->name}}</a><br>
@endforeach<br>
<h2>Módulos:</h1><br>
@foreach ($modules as $module )
<a href="{{route('module',$module->id)}}">{{$module->name}}</a><br>
@endforeach<br>

@endsection