@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">
    <h1>{{ $tutorial->name }}</h1>
    {{-- criado por, subcategoria --}}
    <h6 style="margin-left: 6px">
        Criado por: <a href="{{ route('user', $tutorial->user_id) }}">{{ $tutorial->user->nick
            }}</a> Categoria/Subcategoria: {{$tutorial->subcategory->category_id}}/{{$tutorial->subcategory_id}}
    </h6>
    <br>

    {{-- é o criador --}}
    @if (Auth::id() == $tutorial->user_id)
    {{-- editar titulo --}}
    <a role="button" class="btn text-dark btn-primary" href="{{ route('editTutorialTitle', $tutorial->id) }}">
        <b><i class='bx bxs-edit'></i> Editar título</b>
    </a>
    {{-- deletar tutorial --}}
    <button form="deletetutorial" type='submit' class="btn  btn-outline-danger">
        <b><i class='bx bxs-trash'></i> Deletar tutorial</b>
    </button>
    <form id="deletetutorial" method="POST" action="{{ route('deleteTutorial', $tutorial->id) }}">
        @csrf
        @method('DELETE')
    </form>
    @endif

    <hr class="divider text-white">
    {{-- thumb --}}
    <img class="rounded" src="{{ $tutorial->thumbnail }}" width="400px">
    <br>

    {{-- é o criador --}}
    @if (Auth::id() == $tutorial->user_id)
    {{-- editar thumb --}}
    <a role="button" class="btn btn-primary text-dark" style="margin-top: 10px"
        href="{{ route('editTutorialThumb', $tutorial->id) }}">
        <b><i class='bx bxs-edit'></i> Editar thumb</b>
    </a>
    @endif

    <hr>

    {{-- conteudos --}}
    @foreach ($mix as $mic)
    {{-- conteudo --}}
    <div>

        {{-- é texto --}}
        @if ($mic->text !== null)
        {{-- texto --}}
        <div>
            {{-- texto, posição --}}
            <div class="row">
                {{-- texto --}}
                <div class="col-10">
                    <p class="text-break">{!!nl2br($mic->text)!!}</p>
                </div>
                {{-- posição --}}
                <div class="col-2 d-flex justify-content-end">
                    <div>
                        <span class="badge rounded-pill bg-primary text-dark">Posição: {{ $mic->position }}</span>
                    </div>
                </div>
            </div>
            {{-- editar texto, deletar texto --}}
            <div class="row">
                <div class="col-12">

                    {{-- é o criador --}}
                    @if (Auth::id() == $tutorial->user_id)
                    {{-- editar texto --}}
                    <a role="button" class="btn btn-primary text-dark" href="{{ route('editTutorialText', $mic->id) }}">
                        <i class='bx bxs-edit'></i>
                    </a>
                    {{-- deletar texto --}}
                    <button type="submit" form="delete{{$mic->id}}" class="btn btn-danger text-dark">
                        <i class='bx bxs-trash'></i>
                    </button>
                    <form id="delete{{$mic->id}}" action="{{ route('deleteTutorialText', $mic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endif

                </div>
            </div>
        </div>

        {{-- é video --}}
        @elseif ($mic->video !== null)
        {{-- video --}}
        <div>
            {{-- video, posição --}}
            <div class="row">
                {{-- video --}}
                <div class="col-6">
                    <video class="rounded" width="400" class="video-fluid z-depth-1" controls preload="auto">
                        <source src="{{ $mic->video }}" type="video/mp4">
                    </video>
                </div>
                {{-- posição --}}
                <div class="col-6 d-flex justify-content-end">
                    <div>
                        <span class="badge rounded-pill bg-primary text-dark">Posição: {{ $mic->position }}</span>
                    </div>
                </div>
            </div>

            {{-- é o criador --}}
            @if (Auth::id() == $tutorial->user_id)
            <br>
            {{-- editar conteudo --}}
            <button form="edit{{$mic->id}}" type="submit" class="btn btn-primary text-dark">
                <i class='bx bxs-edit'></i>
            </button>
            <form id="edit{{$mic->id}}" action="{{ route('editTutorialVideo', $mic->id) }}" method="get">
                @csrf
            </form>
            {{-- deletar conteudo --}}
            <button form="delete{{$mic->id}}" type="submit" class="btn btn-danger text-dark">
                <i class='bx bxs-trash'></i>
            </button>
            <form id="delete{{$mic->id}}" action="{{ route('deleteTutorialVideo', $mic->id) }}" method="POST">
                @csrf
                @method('DELETE')
            </form>
            @endif
        </div>

        {{-- é imagem --}}
        @else
        {{-- imagem --}}
        <div>
            {{-- imagem, posição --}}
            <div class="row">
                {{-- imagem --}}
                <div class="col-6">
                    <img class="rounded" src="{{ $mic->image }}" width="400">
                </div>
                {{-- posição --}}
                <div class="col-6 d-flex justify-content-end">
                    <div>
                        <span class="badge rounded-pill bg-primary text-dark">Posição: {{ $mic->position }}</span>
                    </div>
                </div>
            </div>
            {{-- editar imagem, deletar imagem --}}
            <div class="row" style="margin-top: 10px">
                <div class="col-12">

                    {{-- é o criador --}}
                    @if (Auth::id() == $tutorial->user_id)
                    {{-- editar imagem --}}
                    <a class="btn btn-primary text-dark" role="button"
                        href="{{ route('editTutorialImage', $mic->id) }}">
                        <i class='bx bxs-edit'></i>
                    </a>
                    {{-- deletar imagem --}}
                    <button form="image{{$mic->id}}" type="submit" class="btn btn-danger text-dark">
                        <i class='bx bxs-trash'></i>
                    </button>
                    <form id="image{{$mic->id}}" action="{{ route('deleteTutorialImage', $mic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endif

                </div>
            </div>
        </div>
        @endif

        <br>
        <hr>
    </div>
    @endforeach

    {{-- é o criador --}}
    @if (Auth::id() == $tutorial->user_id)
    {{-- novo texto --}}
    <a role="button" class="btn btn-primary text-dark" href="{{ route('newTutorialText', $tutorial->id) }}">
        <b><i class='bx bx-list-plus'></i> Novo texto</b>
    </a>
    {{-- nova imagem --}}
    <a role="button" class="btn btn-primary text-dark" href="{{ route('newTutorialImage', $tutorial->id) }}">
        <b><i class='bx bxs-image-add'></i> Nova imagem</b>
    </a>
    {{-- novo video --}}
    <a role="button" class="btn btn-primary text-dark" href="{{ route('newTutorialVideo', $tutorial->id) }}">
        <b><i class='bx bxs-video-plus'></i> Novo vídeo</b>
    </a>
    @endif

    <br>
    <br>
    {{-- seção de comentários --}}
    <div class="container border border-primary rounded-3 text-white" style="background-color: rgb(24, 24, 24);">
        <h1>Comentários:</h1>
        <br>
        {{-- novo comentário --}}
        <form method="post" id="comment" action="{{ route('insertTutorialComment', $tutorial->id) }}">
            @csrf
            <div class="input-group mb-3">
                {{-- icone --}}
                <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                    <i class='bx bxs-comment-dots'></i>
                </span>
                {{-- campo --}}
                <textarea maxlength="450" class="form-control form-control bg-dark text-white" name="text"
                    required></textarea>
                {{-- submit --}}
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
            {{-- imagem, nick, pagar comentário, data --}}
            <div class="row">
                {{-- imagem, nick, apagar comentário --}}
                <div class="col-6">
                    {{-- imagem --}}
                    <img class="rounded-circle" src="{{ $comment->user->picture }}" width="50">
                    {{-- nick --}}
                    <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">
                        {{$comment->user->nick}}
                    </a>

                    {{-- é o criador --}}
                    @if ($comment->user_id == Auth::id())
                    {{-- apagar comentário --}}
                    <button form="comment{{$comment->id}}" type="submit" class="btn btn-danger text-dark">
                        <i class='bx bxs-trash'></i>
                    </button>
                    <form id="comment{{$comment->id}}" method="post"
                        action="{{ route('DeleteTutorialComment', $comment->id) }}">
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
            {{-- comentário --}}
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