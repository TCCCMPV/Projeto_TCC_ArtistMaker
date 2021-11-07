@extends('layouts.app')
@section('content')
    <h1>{{ $tutorial->name }}</h1>
    @if (Auth::id() == $tutorial->user_id)
        <a href="{{ route('editTutorialTitle', $tutorial->id) }}">Editar título</a>
        <form method="POST" action="{{route('deleteTutorial',$tutorial->id)}}">
            @csrf
            @method('DELETE')
            <input type='submit' value="Deletar tutorial">
        </form>
    @endif
    <p>Criado por:<a href="{{route('user',$tutorial->user_id)}}">{{ $tutorial->user->nick }}</a></p>
    <h2>Thumb:</h2>
    <img src="{{ $tutorial->thumbnail }}" width="200px">
    @if (Auth::id() == $tutorial->user_id)
        <a href="{{ route('editTutorialThumb', $tutorial->id) }}">Editar thumb</a>
    @endif
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
        <a href="{{ route('newTutorialText', $tutorial->id) }}">Novo texto</a><br>
        <a href="{{ route('newTutorialImage', $tutorial->id) }}">Nova Imagem</a><br>
        <a href="{{ route('newTutorialVideo', $tutorial->id) }}">Novo Vídeo</a><br>
    @endif
@endsection
