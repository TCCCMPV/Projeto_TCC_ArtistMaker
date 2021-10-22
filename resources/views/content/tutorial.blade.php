@extends('layouts.app')
@section('content')
    <h1>{{$tutorial->name}}</h1>
    <p>Criado por:{{$tutorial->user->nick}}</p>
    <h2>Thumb:</h2>
    <img src="{{$tutorial->thumbnail}}" width="200px">
    <hr>


    @foreach ($mix as $mic)
        @if ($mic->text !== null)<!--text-->

        <p>{{$mic->text}}</p>
        <form action="{{route('deleteText',$mic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar"><!--deletar texto-->
        </form>

        @else<!--image-->

        <img src="{{$mic->image}}" width="400">
        <form action="{{route('deleteImage',$mic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar"><!--deletar imagem-->
        </form>

        @endif
        <p>posição: {{$mic->position}}</p>
        <br>
        <hr>
    @endforeach

    <form method="POST" action="{{route('newText',$tutorial->id)}}">
        @csrf
        <input type="submit" value="Novo texto">
    </form>
    <form method="POST" action="{{route('newImage', $tutorial->id)}}">
        @csrf
        <input type="submit" value="nova imagem">
    </form>
@endsection