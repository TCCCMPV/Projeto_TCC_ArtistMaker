@extends('layouts.app')
@section('content')
    <form action="{{route('putModuleDesc',$module->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Descrição: </label><textarea name="desc" cols="100" rows="5" placeholder="{{$module->description}}">{{$module->description}} </textarea>
        <input type="submit">
    </form>
@endsection