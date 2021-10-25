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
            @if (Auth::id() == $tutorial->user_id) 
                <form action="{{route('deleteText',$mic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar"><!--deletar texto-->
                </form>
                <form action="{{route('editText',$mic->id)}}" method="get">
                    @csrf
                    <input type="submit" value="Editar"><!--editar texto-->
                </form>
            @endif
        @elseif ($mic->video !== null)
            <video width="400" class="video-fluid z-depth-1" controls preload="auto"  poster="{{$tutorial->thumbnail}}">
                <source src="{{$mic->video}}" type="video/mp4">
            </video><!--video-->
            @if (Auth::id() == $tutorial->user_id) 
                <form action="{{route('deleteVideo',$mic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar"><!--deletar video-->
                </form>
                <form action="{{route('editVideo',$mic->id)}}" method="get">
                    @csrf
                    <input type="submit" value="Editar"><!--editar video-->
                </form>
            @endif
        @else<!--image-->
            <img src="{{$mic->image}}" width="400">
            @if (Auth::id() == $tutorial->user_id) 
                <form action="{{route('deleteImage',$mic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar"><!--deletar imagem-->
                </form>
                <form action="{{route('editImage',$mic->id)}}" method="get">
                    @csrf
                    <input type="submit" value="Editar"><!--editar imagem-->
                </form>
            @endif
        @endif
        <p>posição: {{$mic->position}}</p>
        <br>
        <hr>
    @endforeach
    @if (Auth::id() == $tutorial->user_id)    
        <form method="POST" action="{{route('newText',$tutorial->id)}}">
            @csrf
            <input type="submit" value="Novo texto">
        </form>
        <form method="POST" action="{{route('newImage', $tutorial->id)}}">
            @csrf
            <input type="submit" value="nova imagem">
        </form>
        <form method="POST" action="{{route('newVideo', $tutorial->id)}}">
            @csrf
            <input type="submit" value="novo vídeo">
        </form>
    @endif
@endsection