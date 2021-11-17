@extends('layouts.app')
@section('content')
    <form enctype="multipart/form-data" action="{{route('newModule2')}}" method="POST">
        @csrf
        <label>Nome:</label><input type="text" name="name" required><br>
        <label>Descrição:</label><br><textarea name="description" id="" cols="100" rows="3" required></textarea><br>
        <label>Thumbnail:</label><input type="file" name="thumb"><br>
        <label>Nível de dificuldade</label><input type="number" name="level" required min="1" max="3"><br>
        <label>Categoria:</label><br>
        @foreach ($categories as $category)
        <label >{{$category->id}}</label><input type="radio" name="category" value="{{$category->id}}" required><br>
        @endforeach
        <input type="submit">
    </form>
@endsection