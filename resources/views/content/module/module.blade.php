@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">
    {{-- título --}}
    <h1>{{ $module->name }}</h1>
    {{-- criado por, subcategoria --}}
    <h6 style="margin-left: 6px">
        Criado por: <a href="{{ route('user', $module->user_id) }}">{{ $module->user->nick
            }}</a> Categoria/Subcategoria: {{$module->subcategory->category_id}}/{{$module->subcategory_id}}
    </h6>
    <br>

    {{-- é o criador --}}
    @if (Auth::id() == $module->user_id)
    {{-- editar título --}}
    <a role="button" class="btn text-dark btn-primary" href="{{ route('editModuleTitle', $module->id) }}">
        <b><i class='bx bxs-edit'></i> Editar título</b>
    </a>
    @endif

    <hr class="divider text-white">
    {{-- thumbnail --}}
    <img class="rounded" src="{{ $module->thumbnail }}" width="400px">
    <br>
    {{-- descrição --}}
    <p class="text-break">{!!nl2br($module->description)!!}</p>
    <br>

    {{-- é o criador --}}
    @if (Auth::id() == $module->user_id)
    {{-- editar descrição --}}
    <a role="button" class="btn btn-primary text-dark" style="margin-top: 10px"
        href="{{route('editModuleDesc',$module->id)}}">
        <i class='bx bxs-edit'></i><b> Editar descrição</b>
    </a>
    {{-- editar thumb --}}
    <a role="button" class="btn btn-primary text-dark" style="margin-top: 10px"
        href="{{ route('editModuleThumb', $module->id) }}">
        <b> <i class='bx bxs-edit'></i> Editar thumb</b>
    </a>
    @endif

    <hr>

    {{-- componentes --}}
    @foreach ($contentHasWidgets as $contentHasWidget)
    {{-- componente --}}
    <div class="row">
        {{-- componente e deletar módulo --}}
        <div class="col-11">
            {{-- codigo --}}
            {!! nl2br(str_replace(['{$text1}', '{$text2}', '{$text3}', '{$src1}', '{$src2}', '{$src3}', '{$alt1}',
            '{$alt2}','{$alt3}'], [$contentHasWidget->text1, $contentHasWidget->text2, $contentHasWidget->text3,
            $contentHasWidget->src1,$contentHasWidget->src2, $contentHasWidget->src3, $contentHasWidget->alt1,
            $contentHasWidget->alt2, $contentHasWidget->alt3], $contentHasWidget->widget->code))!!}
            {{-- deletar componente --}}
            <form action="{{route('deleteModuleWidget',$contentHasWidget->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-dark"><b><i class='bx bxs-trash'></i></b></button>
            </form>
        </div>
        {{-- posição --}}
        <div class="col-1 d-flex justify-content-end">
            <div>
                <span class="badge rounded-pill bg-primary text-dark">
                    Posição: {{ $contentHasWidget->position }}
                </span>
            </div>
        </div>
    </div>
    <hr>
    @endforeach

    {{-- é o criador --}}
    @if (auth::id() == $module->user_id)
    {{-- novo componente --}}
    <a role="button" class="btn btn-primary text-dark" href="{{route('newModuleWidget1',$module->id)}}">
        <i class='bx bxs-customize'></i><b> Novo componente</b>
    </a>
    <br>
    <br>
    @endif

    <hr class="divider">
    {{-- seção comentários --}}
    <div class="container border border-primary rounded-3 text-white" style="background-color: rgb(24, 24, 24);">
        <h1>Comentários:</h1>
        <br>
        {{-- novo comentário --}}
        <form method="post" id="comment" action="{{ route('insertModuleComment', $module->id) }}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                    <i class='bx bxs-comment-dots'>
                    </i>
                </span>
                <textarea maxlength="450" class="form-control form-control bg-dark text-white" name="text"
                    required></textarea>
                <button form="comment" type="submit" class="btn btn-primary text-dark">
                    <i class='bx bxs-send'></i>
                </button>
            </div>
        </form>
        <br>
        <hr class="divider">

        {{-- comentários --}}
        @foreach ($comments as $comment)
        {{-- comentário --}}
        <div>
            <div class="row">
                {{-- foto, nick , deletar comentário--}}
                <div class="col-6">
                    {{-- foto --}}
                    <img class="rounded-circle" src="{{ $comment->user->picture }}" width="50">
                    {{-- nick --}}
                    <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">{{
                        $comment->user->nick}}</a>

                    {{-- é o criador --}}
                    @if ($comment->user_id == Auth::id())
                    {{-- deletar comentário --}}
                    <button form="deletecomment{{ $comment->id }}" class="btn btn-danger text-dark" type="submit">
                        <i class="bx bxs-trash"></i>
                    </button>
                    <form id="deletecomment{{$comment->id}}" method="post"
                        action="{{ route('DeleteModuleComment', $comment->id) }}">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endif

                </div>
                {{-- data --}}
                <div class="col-6 d-flex justify-content-end">
                    Postado: {{ $comment->created_at->format('d/m/y - H:i') }}
                </div>
            </div>
            {{-- texto --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-break">{!! nl2br($comment->comment)!!}</p>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>

@endsection