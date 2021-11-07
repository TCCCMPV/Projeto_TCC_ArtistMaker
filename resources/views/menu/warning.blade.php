@extends('layouts.app')
@section('content')
    @if ($data['type']=='2buttons')
        <p>{{$data['text']}}</p><br>
        <p><a href="{{$data['button 1 href']}}">{{$data['button 1']}}</a> <a href="{{$data['button 2 href']}}">{{$data['button 2']}}</a></p>
    @endif
@endsection