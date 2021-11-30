@extends('layouts.app')
@section('content')
    <h1>{{ $course->name }}</h1>
    <img src="{{ $course->thumbnail }}" width="400"><br>
    <p><b>Criado por:</b> <a href="{{ route('user', $course->user_id) }}">{{ $course->user->nick }}</a>
        <b>Categoria/Subcategoria:</b> {{ $course->subcategory->category->id }}/{{ $course->subcategory->id }}
    </p>
    <p>
        {{ $course->description }}
    </p>
    <hr>
    <h1>Módulos:</h1>
    @if($course->user_id == auth::id())
        <a href="{{ route('newCourseModule', $course->id) }}">Novo módulo</a>
    @endif
    @foreach ($modules as $module)
        <a href="{{ route('courseModule', $module->id) }}">
            <table>
                <tr>
                    <td><img src="{{ $module->thumbnail }}" width="200"></td>
                    <td>{{ $module->name }}</td>
                </tr>
                <tr>
                    <td>{{ $module->description }}</td>
                </tr>
                <tr>
                    <td>[{{ $module->position }}]</td>
                </tr>
            </table>
        </a>
        {{-- <hr>
        <img src="{{ $module->thumbnail }}"><br>
        <h1>{{ $module->name}}</h1>
        <hr> --}}
    @endforeach
@endsection
