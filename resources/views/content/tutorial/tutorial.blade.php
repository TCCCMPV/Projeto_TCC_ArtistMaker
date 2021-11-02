@extends('layouts.app')
@section('content')
    <h1>{{ $tutorial->name }}</h1>
    <a href="{{ route('editTutorialTitle', $tutorial->id) }}">Editar título</a>
    <p>Criado por:{{ $tutorial->user->nick }}</p>
    <h2>Thumb:</h2>
    <img src="{{ $tutorial->thumbnail }}" width="200px">
    <a href="{{ route('editTutorialThumb', $tutorial->id) }}">Editar thumb</a>
    <hr>


    @foreach ($mix as $mic)
        <!--Text-->
        @if ($mic->text !== null)
            <p>{{ $mic->text }}</p>
            @if (Auth::id() == $tutorial->user_id)
                <form action="{{ route('deleteTutorialText', $mic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar">
                    <!--deletar texto-->
                </form>
                <a href="{{ route('editTutorialText', $mic->id) }}">Editar</a>
            @endif
            <!--Video-->
        @elseif ($mic->video !== null)
            <video width="400" class="video-fluid z-depth-1" controls preload="auto" poster="{{ $tutorial->thumbnail }}">
                <source src="{{ $mic->video }}" type="video/mp4">
            </video>
            @if (Auth::id() == $tutorial->user_id)
                <form action="{{ route('deleteTutorialVideo', $mic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar">
                    <!--deletar video-->
                </form>
                <form action="{{ route('editTutorialVideo', $mic->id) }}" method="get">
                    @csrf
                    <input type="submit" value="Editar">
                    <!--editar video-->
                </form>
            @endif
            <!--image-->
        @else
            <img src="{{ $mic->image }}" width="400">
            @if (Auth::id() == $tutorial->user_id)
                <form action="{{ route('deleteTutorialImage', $mic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar">
                    <!--deletar imagem-->
                </form>
                <a href="{{ route('editTutorialImage', $mic->id) }}">Editar</a>
            @endif
        @endif
        <p>posição: {{ $mic->position }}</p>
        <br>
        <hr>
    @endforeach
    @if (Auth::id() == $tutorial->user_id)
        <form method="POST" action="{{ route('newTutorialText', $tutorial->id) }}">
            @csrf
            <input type="submit" value="Novo texto">
        </form>
        <form method="POST" action="{{ route('newTutorialImage', $tutorial->id) }}">
            @csrf
            <input type="submit" value="nova imagem">
        </form>
        <form method="POST" action="{{ route('newTutorialVideo', $tutorial->id) }}">
            @csrf
            <input type="submit" value="novo vídeo">
        </form>
    @endif
@endsection
