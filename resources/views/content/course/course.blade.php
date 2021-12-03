@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">
    <h1>{{ $course->name }}</h1>
    <h6 style="margin-left: 6px">Criado por: <a href="{{ route('user', $course->user_id) }}">{{ $course->user->nick
            }}</a> Categoria/Subcategoria: {{$course->subcategory->category_id}}/{{$course->subcategory_id}}</h6>
    <br>
    @if (Auth::id() == $course->user_id)
    <a href="{{route('editCourseTitle',$course->id)}}"> <button type="button" class="btn text-dark btn-primary"><b>
                <i class='bx bxs-edit'></i> Editar título</b> </button></a>
    <button form="deletecourse" type='submit' class="btn  btn-outline-danger"> <b> <i class='bx bxs-trash'></i>
            Deletar course</b> </button>
    <form id="deletecourse" method="POST" action="{{route('deleteCourse',$course->id)}}">
        @csrf
        @method('DELETE')
    </form>
    @endif

    <hr class="divider text-white">
    <img class="rounded" src="{{ $course->thumbnail }}" width="400px">
    <br>
    <p class="text-break">{!!nl2br($course->description)!!}</p><br>
    @if (Auth::id() == $course->user_id)
    <a href="{{route('editCourseThumb',$course->id)}}"> <button class="btn btn-primary text-dark" style="margin-top: 10px"><b><i class='bx bxs-edit'></i> Editar
                thumb</b> </button> </a><br>
    <a href="{{route('newCourseModule',$course->id)}}"><button style="margin-top: 10px"
            class="btn btn-primary text-dark"><i class='bx bxs-bookmark-alt-plus'></i><b> Criar Módulo</b></button></a>
    @endif
    <hr>
    @foreach ($modules as $module)
    <div class="row" >
        <div class="col-5">
            <img class="img-fluid rounded" style="max-width: 400px; max-height: 400px" src="{{$module->thumbnail}}">
        </div>
        <div class="col-7">
            <div class="row">
                <div class="col-9">
                    <h3><a href="{{route('moduleCourse',$module->id)}}">{{$module->name}}</a></h3>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <div>
                        <div><span class="badge rounded-pill bg-primary text-dark">Posição: {{ $module->position
                                }}</span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-break">{!!nl2br($module->description)!!}</p>
                </div>
            </div>
        </div> 
        @endforeach
        <br><br><br>
       <hr class="divider">

        <div class="container border border-primary rounded-3 text-white" style="background-color: rgb(24, 24, 24);">
            <h1>Comentários:</h1><br>
            <form method="post" id="comment" action="{{ route('insertCourseComment', $course->id) }}">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text bg-primary text-dark" id="basic-addon1"><i
                            class='bx bxs-comment-dots'></i></span><textarea maxlength="450"
                        class="form-control form-control bg-dark text-white" name="text" required></textarea> <button
                        form="comment" type="submit" class="btn btn-primary text-dark"><i
                            class='bx bxs-send'></i></button>
                </div>
            </form><br>
            @foreach ($comments as $comment)
            <div style="margin: 10px">
                <div class="row">

                    <div class="col-6">
                        <img class="rounded-circle" src="{{ $comment->user->picture }}" width="50">
                        <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">{{
                            $comment->user->nick}}</a>
                        @if ($comment->user_id == Auth::id())
                       {{-- <a href="{{ route('editCourseComment', $comment->id) }}"><button
                                class="btn btn-primary text-dark" style="margin-right: 6px; margin-left: 6px;"><i
                                    class='bx bxs-edit'></i></button></a>--}}
                        <button form="comment{{$comment->id}}" type="submit" class="btn btn-danger text-dark"><i
                                class='bx bxs-trash'></i></button>
                        @endif
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        Postado: {{ $comment->created_at->format('d/m/y - H:i') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-break">{!! nl2br($comment->comment) !!}</p>
                    </div>
                </div>
            </div>
            @if ($comment->user_id == Auth::id())
            <form id="comment{{$comment->id}}" method="post" action="{{ route('DeleteCourseComment', $comment->id) }}">
                @csrf
                @method('DELETE')
            </form>
            @endif
            <hr class="divider text-white">
            @endforeach
        </div>
    </div>


    @endsection

    {{--
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

    <img src="{{ $module->thumbnail }}"><br>
    <h1>{{ $module->name}}</h1>

    @endforeach
    <hr>--}}