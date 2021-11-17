@extends('layouts.app')
@section('content')
    <form action="{{route('postModule')}}" method="post">
        @csrf
        <h1>Escolha uma subcategoria{{$category}}</h1>
        <br>
        @foreach ($subcategories as $subcategory)
            <label>{{$subcategory->id}}</label><input type="radio" name="subcategory" value="{{$subcategory->id}}" required><br>
        @endforeach
        <input type="hidden" name="module_id" value="{{$module_id}}">
        <input type="submit">
    </form>
@endsection