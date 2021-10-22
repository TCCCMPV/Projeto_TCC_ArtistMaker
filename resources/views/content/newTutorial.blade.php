@extends('layouts.app')
@section('content')

<form method="POST" action="{{route('createTutorial')}}" enctype="multipart/form-data">
@csrf
<label>Nome: </label>
<input type="text" name="name"></br>
<label>Thumb: </label>
<input type="file" name='image'></br>
<input type="submit" value="criar">
</form>

@endsection