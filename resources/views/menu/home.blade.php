@extends('layouts.teste')

@section('content')
<nav>
    <a href="{{route('searchTutorial')}}">Tutoriais</a>
    <a href="{{route('searchCourse')}}">Cursos</a>
    <a href="{{route('searchModule')}}">Módulos</a>
</nav>

<img src="/default/UnknownContent.png">
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection
