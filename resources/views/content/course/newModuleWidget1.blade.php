@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form method="post" action="{{route('newCourseModuleWidget2',$id)}}">
        @csrf
        <div class="input-group mb-3">
            <h1>Criar componente</h1>
        </div>
        {{-- componente --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bxs-layout'></i>
            </span>
            <label class="input-group-text bg-primary text-dark" for="inputGroupSelect01">
                <b>Componente</b>
            </label>
            <select name="widget" class="form-select bg-dark text-white" id="inputGroupSelect01" required>
                <option selected>Escolha o componente...</option>

                @foreach ($widgets as $widget)
                <option class="bg-dark text-white" value="{{$widget->id}}">{{$widget->name}}</option>
                @endforeach

            </select>
        </div>
        {{-- submit --}}
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary text-dark"><b>Criar componente</b></button>
        </div>
    </form>
</div>

@endsection