@extends('layouts.app')
@section('content')

    <form action="{{route('insertModuleWidget', $id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($widget == 1)
            <label>Seção:</label><input type="text" name="text1"><br>
        @endif
        @if ($widget == 2)
            <label>Título:</label><input type="text" name="text1"><br>
        @endif
        @if ($widget == 3)
            <label>Subtítulo: </label><textarea name="text1" cols="30" rows="10"></textarea><br>
            <input type="file" name="src1"><br>
            <label>Descrição: </label><textarea name="text2" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 4)
            <input type="file" name="src1"><br>
            <label>Descrição: </label><textarea name="text1" cols="50" rows="5"></textarea><br>
        @endif
        @if ($widget == 5)
            <label>Subtítulo: </label><textarea name="text1" cols="30" rows="10"></textarea><br>
            <input type="file" name="src1"><br>
        @endif
        @if ($widget == 6)
            <input type="file" name="src1"><br>
        @endif
        @if ($widget == 7)
            <label>Subtítulo: </label><input type="text" name="text1"><br>
            <label>Texto: </label><textarea name="texte" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 8)
            <label>Texto:</label><textarea name="text1" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 9)
            <label>Subtítulo: </label><input type="text" name="text1"><br>
            <label>Video: </label><input type="file" name="src1"><br>
            <label>Descrição</label><textarea name="text2" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 10)
            <label>Subtítulo: </label><input type="text" name="text1"><br>
            <label>Video: </label><input type="file" name="src1"><br>
        @endif
        @if ($widget == 11)
            <label>Video: </label><input type="file" name="src1"><br>
            <label>Descrição:</label><textarea name="text1" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 12)
            <label>Video: </label><input type="file" name="src1"><br>
        @endif
        @if ($widget == 13)
            <label>Subtítulo:</label><input type="text" name="text1"><br>
            <label>Audio:</label><input type="file" name="src1"><br>
            <label>Descrição:</label><textarea name="text2" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 14)
            <label>Audio:</label><input type="file" name="src1"><br>
            <label>Descrição:</label><textarea name="text1" cols="30" rows="10"></textarea><br>
        @endif
        @if ($widget == 15)
            <label>Subtítulo:</label><input type="text" name="text1"><br>
            <label>Audio:</label><input type="file" name="src1"><br>
        @endif
        @if ($widget == 16)
            <label>Audio:</label><input type="file" name="src1"><br>
        @endif
        @if ($widget == 17)
            <label>Criar uma seção de exercícios</label><br>
        @endif
        @if ($widget == 18)
            <label>Criar um título de exercícios</label><br>
        @endif
        <label>Posição:</label><input type="number" name="position"><br>
        <input type="hidden" name="widget" value="{{$widget}}"><br>
        <input type="submit" value="Confirmar"><br>
    </form>
@endsection
