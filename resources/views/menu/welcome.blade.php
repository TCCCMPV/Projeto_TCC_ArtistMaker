@extends('layouts.default')
@section('content')


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">

        {{-- está authenticado --}}
        @auth
        {{-- home --}}
        <a style="color: blue" href="{{ url('/home') }}">
            <div>
                <box-icon type='solid' name='home'></box-icon>
            </div>
            Home
        </a>

        {{-- não está authenticado --}}
        @else
        {{-- logar --}}
        <a href="{{ route('login') }}">
            <button type="button" class="btn btn-outline-primary shadow">
                <i class='bx bx-log-in'></i> <b>Login<b>
            </button>
        </a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">
            <button class="btn btn-outline-success shadow">
                <b>Cadastre-se</b>
            </button>
        </a>
        @endif

        @endauth

    </div>
    @endif

    {{-- logo e botões --}}
    <div class="content">
        {{-- logo --}}
        <div class="title m-b-md">
            Artist Maker
        </div>
        {{-- links --}}
        <div class="links">
            {{-- tutoriais --}}
            <a href="{{route('searchTutorial')}}">
                <button class="btn btn-primary shadow">
                    <i class='bx bxs-pencil'></i><b> Tutoriais</b>
                </button>
            </a>
            {{-- cursos --}}
            <a href="{{route('searchCourse')}}">
                <button class="btn btn-primary shadow">
                    <i class='bx bxs-book'></i><b> Cursos</b>
                </button>
            </a>
            {{-- modulos --}}
            <a href="{{route('searchModule')}}">
                <button class="btn btn-primary shadow">
                    <i class='bx bxs-book-content'></i><b> Módulos</b>
                </button>
            </a>
        </div>
    </div>
</div>
@endsection