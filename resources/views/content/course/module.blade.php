@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">
    {{-- título --}}
    <h1>{{ $module->name }}</h1>
    {{-- criado por, curso --}}
    <h6 style="margin-left: 6px">
        Criado por: <a href="{{ route('user', $module->user_id) }}">{{$module->user->nick}}</a> Curso: <a
            href="{{route('course',$module->content_id)}}">{{$module->content->name}}</a>
    </h6>
    <br>

    {{-- é o criador --}}
    @if (Auth::id() == $module->user_id)
    {{-- editar titulo --}}
    <a role="button" class="btn text-dark btn-primary" href="{{ route('editCourseModuleTitle', $module->id) }}">
        <b><i class='bx bxs-edit'></i> Editar título</b>
    </a>
    {{-- deletar modulo --}}
    <button form="deletemodule" type='submit' class="btn  btn-outline-danger">
        <b><i class='bx bxs-trash'></i> Deletar módulo</b>
    </button>
    <form id="deletemodule" method="POST" action="{{route('deleteCourseModule',$module->id)}}">
        @csrf
        @method('DELETE')
    </form>
    @endif

    <hr class="divider text-white">
    {{-- thumbnail --}}
    <img class="rounded" src="{{ $module->thumbnail }}" width="400px">
    <br>
    {{-- descrição --}}
    <p class="text-break">{!!nl2br($module->description)!!}</p>
    <br>
    {{-- editar descrição --}}
    <a role="button" class="btn btn-primary text-dark" style="margin-top: 10px"
        href="{{route('editCourseModuleDesc',$module->id)}}">
        <i class='bx bxs-edit'></i><b> Editar descrição</b>
    </a>

    @if (Auth::id() == $module->user_id)
    <a href="{{ route('editCourseModuleThumb', $module->id) }}">
        <button class="btn btn-primary text-dark" style="margin-top: 10px">
            <b><i class='bx bxs-edit'></i> Editar thumb</b>
        </button>
    </a>
    @endif

    <hr>

    {{-- widgets --}}
    @foreach ($contentHasWidgets as $contentHasWidget)
    {{-- widget --}}
    <div class="row">
        {{-- codigo e deletar widget --}}
        <div class="col-11">
            {{-- codigo --}}
            {!! nl2br(str_replace(['{$text1}', '{$text2}', '{$text3}', '{$src1}', '{$src2}', '{$src3}', '{$alt1}',
            '{$alt2}','{$alt3}'], [$contentHasWidget->text1, $contentHasWidget->text2, $contentHasWidget->text3,
            $contentHasWidget->src1,$contentHasWidget->src2, $contentHasWidget->src3, $contentHasWidget->alt1,
            $contentHasWidget->alt2, $contentHasWidget->alt3], $contentHasWidget->widget->code))!!}
            {{-- deletar widget --}}
            <form action="{{route('deleteCourseModuleWidget',$contentHasWidget->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-dark">
                    <b><i class='bx bxs-trash'></i></b>
                </button>
            </form>
        </div>
        {{-- posição --}}
        <div class="col-1 d-flex justify-content-end">
            <div>
                <span class="badge rounded-pill bg-primary text-dark">Posição: {{ $contentHasWidget->position }}</span>
            </div>
        </div>
    </div>
    <hr>
    @endforeach

    {{-- novo componente --}}
    <a href="{{route('newCourseModuleWidget1',$module->id)}}">
        <button class="btn btn-primary text-dark">
            <i class='bx bxs-customize'></i><b> Novo componente</b>
        </button>
    </a>
    <hr class="divider text-white">
    {{-- seção comentários --}}
    <div class="container border border-primary rounded-3 text-white" style="background-color: rgb(24, 24, 24);">
        <h1>Comentários:</h1>
        <br>
        {{-- novo comentário --}}
        <form method="post" id="comment" action="{{ route('insertCourseModuleComment', $module->id) }}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                    <i class='bx bxs-comment-dots'></i>
                </span>
                <textarea maxlength="450" class="form-control form-control bg-dark text-white" name="text"
                    required></textarea>
                <button form="comment" type="submit" class="btn btn-primary text-dark">
                    <i class='bx bxs-send'></i>
                </button>
            </div>
        </form>
        <br>

        {{-- comentários --}}
        @foreach ($comments as $comment)
        {{-- comentário --}}
        <div style="margin: 10px">
            {{-- imagem, nick, deletar comentario --}}
            <div class="row">
                {{-- imagem, nick --}}
                <div class="col-6">
                    {{-- imagem --}}
                    <img class="rounded-circle" src="{{ $comment->user->picture }}" width="50">
                    {{-- nick --}}
                    <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">
                        {{$comment->user->nick}}
                    </a>

                    {{-- é o dono --}}
                    @if ($comment->user_id == Auth::id())
                    {{-- deletar comentário --}}
                    <button form="comment{{$comment->id}}" type="submit" class="btn btn-danger text-dark">
                        <i class='bx bxs-trash'></i>
                    </button>
                    <form id="comment{{$comment->id}}" method="post" action="{{ route('DeleteTutorialComment', $comment->id) }}">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endif

                </div>
                {{-- postado em --}}
                <div class="col-6 d-flex justify-content-end">
                    Postado: {{ $comment->created_at->format('d/m/y - H:i') }}
                </div>
            </div>
            {{-- texto --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-break">{!! nl2br($comment->comment) !!}</p>
                </div>
            </div>
        </div>

        <hr class="divider text-white">
        @endforeach

    </div>
</div>

@endsection