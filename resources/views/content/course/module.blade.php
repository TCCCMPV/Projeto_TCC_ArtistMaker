@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">
    <h1>{{ $module->name }}</h1>
    <h6 style="margin-left: 6px">Criado por: <a href="{{ route('user', $module->user_id) }}">{{ $module->user->nick
            }}</a> Curso: <a href="{{route('course',$module->content_id)}}">{{$module->content->name}}</a></h6>
    <br>
    @if (Auth::id() == $module->user_id)
    <a href="{{ route('editCourseModuleTitle', $module->id) }}"> <button type="button"
            class="btn text-dark btn-primary"><b>
                <i class='bx bxs-edit'></i> Editar título</b> </button></a>
    <button form="deletemodule" type='submit' class="btn  btn-outline-danger"> <b> <i class='bx bxs-trash'></i>
            Deletar módulo</b> </button>
    <form id="deletemodule" method="POST" action="">
        @csrf
        @method('DELETE')
    </form>
    @endif

    <hr class="divider text-white">
    <img class="rounded" src="{{ $module->thumbnail }}" width="400px">
    <br>
    <p class="text-break">{!!nl2br($module->description)!!}</p><br>
    <a href="{{route('editCourseModuleDesc',$module->id)}}">
        <button class="btn btn-primary text-dark" style="margin-top: 10px"><i class='bx bxs-edit'></i><b> Editar
                descrição</b></button></a>
    @if (Auth::id() == $module->user_id)
    <a href="{{ route('editCourseModuleThumb', $module->id) }}">
        <button class="btn btn-primary text-dark" style="margin-top: 10px"> <b> <i class='bx bxs-edit'></i> Editar thumb
            </b> </button> </a>
    @endif
    <hr>

    @foreach ($contentHasWidgets as $contentHasWidget)
    {!! nl2br(str_replace(['{$text1}', '{$text2}', '{$text3}', '{$src1}', '{$src2}', '{$src3}', '{$alt1}',
    '{$alt2}','{$alt3}'], [$contentHasWidget->text1, $contentHasWidget->text2, $contentHasWidget->text3,
    $contentHasWidget->src1,$contentHasWidget->src2, $contentHasWidget->src3, $contentHasWidget->alt1,
    $contentHasWidget->alt2, $contentHasWidget->alt3], $contentHasWidget->widget->code))!!}


    <form action="{{route('deleteCourseModuleWidget',$contentHasWidget->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger text-dark"><b><i class='bx bxs-trash'></i></b></button>
    </form>
    <p>[{{ $contentHasWidget->position }}]</p>

    <hr>
    @endforeach
    <a href="{{route('newCourseModuleWidget1',$module->id)}}"> <button class="btn btn-primary text-dark"><i
                class='bx bxs-customize'></i><b> Novo componente</b></button></a>

    <hr class="divider text-white">


    <h1>Comentários:</h1> <br>
    <form method="post" id="comment" action="{{ route('insertCourseModuleComment', $module->id) }}">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1"><i
                    class='bx bxs-comment-dots'></i></span><textarea maxlength="450"
                class="form-control form-control bg-dark text-white" name="text" required></textarea> <button
                form="comment" type="submit" class="btn btn-primary text-dark"><i class='bx bxs-send'></i></button>
        </div>
    </form><br>

    <div class="container border border-primary rounded-3 text-white" style="background-color: rgb(24, 24, 24);">

        @foreach ($comments as $comment)
        <div style="margin: 10px">
            <div class="row">

                <div class="col-6">
                    <img class="rounded-circle" src="{{ $comment->user->picture }}" width="50">
                    <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">{{
                        $comment->user->nick}}</a>
                    @if ($comment->user_id == Auth::id())
                    <a href="{{ route('editTutorialComment', $comment->id) }}"><button class="btn btn-primary text-dark"
                            style="margin-right: 6px; margin-left: 6px;"><i class='bx bxs-edit'></i></button></a>
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
        <form id="comment{{$comment->id}}" method="post" action="{{ route('DeleteTutorialComment', $comment->id) }}">
            @csrf
            @method('DELETE')
        </form>
        @endif
        <hr class="divider text-white">
        @endforeach
    </div>
</div>
@endsection