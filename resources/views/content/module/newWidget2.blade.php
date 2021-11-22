@extends('layouts.app')
@section('content')

<form action="{{route('insertModuleWidget',$id)}}" method="post" enctype="multipart/form-data">
    
    @if ($widget == 1)
    <label>Seção:</label><input type="text" name="text1">
    @endif
    @if ($widget == 2)
    <label>Título:</label><input type="text" name="text1">
    @endif
    @if ($widget == 3)
    <label>Subtítulo: </label><textarea name="text1" cols="30" rows="10"></textarea>
    <input type="file" name="src1">
    <label>Descrição: </label><input type="text" name="text2">
    @endif
    @if ($widget == 4)
    <input type="file" name="src1">
    <label>Descrição: </label><input type="text" name="text1">
    @endif
    @if ($widget == 5)
    <label>Subtítulo: </label><textarea name="text1" cols="30" rows="10"></textarea>
    <input type="file" name="src1">
    @endif
    @if ($widget == 6)
    <input type="file" name="src1">
    @endif
    @if ($widget == 7)
    <label>Subtítulo: </label><input type="text" name="text1">
    <label>Texto: </label><textarea name="texte" cols="30" rows="10"></textarea>
    @endif
    @if ($widget == 8)
    <label>Texto:</label><textarea name="text1" cols="30" rows="10"></textarea>
    @endif
    @if ($widget == 9)
    <label>Subtítulo: </label><input type="text" name="text1">
    <label>Video: </label><input type="file" name="src1">
    <label>Descrição</label><textarea name="text2"cols="30" rows="10"></textarea>
    @endif
    @if ($widget == 10)
    <label>Subtítulo: </label><input type="text" name="text1">
    <label>Video: </label><input type="file" name="src1">
    @endif
    @if ($widget == 11)
    <label>Video: </label><input type="file" name="src1">
    <label>Descrição:</label><textarea name="text1"cols="30" rows="10"></textarea>
    @endif
    @if ($widget == 12)
    <label>Video: </label><input type="file" name="src1">
    @endif
    @if ($widget == 13)
    <label>Subtítulo:</label><input type="text" name="text1">
    <label>Audio:</label><input type="file" name="src1">
    <label>Descrição:</label><textarea name="text2" cols="30" rows="10"></textarea>
    @endif
    @if ($widget == 14)
    <label>Audio:</label><input type="file" name="src1">
    <label>Descrição:</label><textarea name="text1" cols="30" rows="10"></textarea>
    @endif
    @if ($widget == 15)
    <label>Subtítulo:</label><input type="text" name="text1">
    <label>Audio:</label><input type="file"name="src1">
    @endif
    @if ($widget == 16)
    <label>Audio:</label><input type="file" name="src1">
    @endif
    @if ($widget == 17)
    @endif
    @if ($widget == 18)
    @endif
    <input type="submit" value="Confirmar">
</form>
    @endsection
    