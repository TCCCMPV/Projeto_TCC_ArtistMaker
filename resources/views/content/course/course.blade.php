@extends('layouts.default')
@section('content')

<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">
    {{-- título --}}
    <h1>{{ $course->name }}</h1>
    {{-- criado por, categoria e subcategoria --}}
    <h6 style="margin-left: 6px">
        Criado por:<a href="{{ route('user', $course->user_id) }}">{{$course->user->nick}}</a> Categoria/Subcategoria:
        {{$course->subcategory->category_id}}/{{$course->subcategory_id}}
    </h6>
    <br>

    {{-- é o criador --}}
    @if(Auth::id() == $course->user_id)
    {{-- editar título --}}
    <a role="button" class="btn text-dark btn-primary" href="{{route('editCourseTitle',$course->id)}}">
        <b>
            <i class='bx bxs-edit'></i> Editar título
        </b>
    </a>
    {{-- deletar curso --}}
    <button form="deletecourse" type='submit' class="btn  btn-outline-danger"> <b> <i class='bx bxs-trash'></i>
            Deletar curso</b> </button>
    <form id="deletecourse" method="POST" action="{{route('deleteCourse',$course->id)}}">
        @csrf
        @method('DELETE')
    </form>
    @endif

    <hr class="divider text-white">
    {{-- imagem --}}
    <img class="rounded" src="{{ $course->thumbnail }}" width="400px">
    <br>
    {{-- descrição --}}
    <p class="text-break">{!!nl2br($course->description)!!}</p>
    <br>

    {{-- é o criador --}}
    @if (Auth::id() == $course->user_id)
    {{-- editar thumb --}}
    <a role="button" class="btn btn-primary text-dark" style="margin-top: 10px" href="{{route('editCourseThumb',$course->id)}}">
            <b><i class='bx bxs-edit'></i> Editar thumb</b>
    </a>
    <br>
    {{-- criar módulo --}}
    <a role="button" style="margin-top: 10px" class="btn btn-primary text-dark" href="{{route('newCourseModule',$course->id)}}">
            <i class='bx bxs-bookmark-alt-plus'></i><b> Criar Módulo</b>
    </a>
    @endif

    <hr>

    {{-- módulos --}}
    @foreach ($modules as $module)
    <div class="row">
        {{-- thumb --}}
        <div class="col-5">
            <img class="img-fluid rounded" style="max-width: 400px; max-height: 400px" src="{{$module->thumbnail}}">
        </div>
        {{-- dados --}}
        <div class="col-7">
            {{-- nome e posição --}}
            <div class="row">
                {{-- nome --}}
                <div class="col-9">
                    <h3><a href="{{route('moduleCourse',$module->id)}}">{{$module->name}}</a></h3>
                </div>
                {{-- posição --}}
                <div class="col-3 d-flex justify-content-end">
                    <div>
                        <span class="badge rounded-pill bg-primary text-dark">
                            Posição: {{ $module->position }}
                        </span>
                    </div>
                </div>
            </div>
            {{-- descrição --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-break">{!!nl2br($module->description)!!}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <br>
    <hr class="divider">
    {{-- seção comentários --}}
    <div class="container border border-primary rounded-3 text-white" style="background-color: rgb(24, 24, 24);">
        <h1>Comentários:</h1><br>

        @auth
        {{-- inserir comentários --}}
        <form method="post" id="comment" action="{{ route('insertCourseComment', $course->id) }}">
            @csrf
            <div class="input-group mb-3">
                {{-- icone --}}
                <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                    <i class='bx bxs-comment-dots'></i>
                </span>
                {{-- campo --}}
                <textarea maxlength="450" class="form-control form-control bg-dark text-white" name="text"
                    required></textarea>
                {{-- botão --}}
                <button form="comment" type="submit" class="btn btn-primary text-dark">
                    <i class='bx bxs-send'></i>
                </button>
            </div>
        </form>
        <br>
        @endauth

        {{-- comentários --}}
        @foreach ($comments as $comment)
        {{-- comentário --}}
        <div style="margin: 10px">
            {{-- imagem, nick, deletar, data --}}
            <div class="row">
                <div class="col-6">
                    {{-- imagem --}}
                    <img class="rounded-circle" src="{{ $comment->user->picture }}" width="50">
                    {{-- nick --}}
                    <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">
                        {{ $comment->user->nick}}
                    </a>

                    {{-- é o criador do comentário --}}
                    @if ($comment->user_id == Auth::id())
                    {{-- deletar comentário --}}
                    <button form="comment{{$comment->id}}" type="submit" class="btn btn-danger text-dark">
                        <i class='bx bxs-trash'></i>
                    </button>
                    @endif

                </div>
                {{-- data --}}
                <div class="col-6 d-flex justify-content-end">
                    Postado: {{ $comment->created_at->format('d/m/y - H:i') }}
                </div>
            </div>
            {{-- conteúdo --}}
            <div class="row">
                <div class="col-12">
                    <p class="text-break">{!! nl2br($comment->comment) !!}</p>
                </div>
            </div>
        </div>

        {{-- é o dono do comentário --}}
        @if ($comment->user_id == Auth::id())
        {{-- deletar --}}
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