@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 bg-dark rounded-3 border border-primary shadow-lg">

    <h1>{{ $tutorial->name }}</h1>
    <h6 style="margin-left: 6px">Criado por: <a href="{{ route('user', $tutorial->user_id) }}">{{ $tutorial->user->nick
            }}</a> Categoria/Subcategoria: {{$tutorial->subcategory->category_id}}/{{$tutorial->subcategory_id}}</h6>
    <br>
    @if (Auth::id() == $tutorial->user_id)
    <a href="{{ route('editTutorialTitle', $tutorial->id) }}"> <button type="button"
            class="btn text-dark btn-primary"><b> <i class='bx bxs-edit'></i> Editar título</b> </button></a>
    <button form="deletetutorial" type='submit' class="btn  btn-outline-danger"> <b> <i class='bx bxs-trash'></i>
            Deletar tutorial</b> </button>
    <form id="deletetutorial" method="POST" action="{{ route('deleteTutorial', $tutorial->id) }}">
        @csrf
        @method('DELETE')
    </form>
    @endif

    <hr class="divider text-white">
    <img class="rounded" src="{{ $tutorial->thumbnail }}" width="400px">
    <br>

    @if (Auth::id() == $tutorial->user_id)
    <a href="{{ route('editTutorialThumb', $tutorial->id) }}"> <button class="btn btn-primary text-dark"
            style="margin-top: 10px"><b><i class='bx bxs-edit'></i> Editar thumb</b> </button> </a>
    @endif
    <hr>


    @foreach ($mix as $mic)
    <!--Text-->
    @if ($mic->text !== null)
    <div class="row">
        <div class="col-9">
            <p class="text-break">{!!nl2br($mic->text)!!}</p>
        </div>
        <div class="col-3 d-flex justify-content-end">
            <div>
                <div><span class="badge rounded-pill bg-primary text-dark">Posição: {{ $mic->position }}</span></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (Auth::id() == $tutorial->user_id)
            <a href="{{ route('editTutorialText', $mic->id) }}"><button class="btn btn-primary text-dark"><i
                        class='bx bxs-edit'></i></button></a>
            <button type="submit" form="delete{{$mic->id}}" class="btn btn-danger text-dark"><i
                    class='bx bxs-trash'></i></button>
            @endif
        </div>
    </div>
    @if (Auth::id() == $tutorial->user_id)
    <form id="delete{{$mic->id}}" action="{{ route('deleteTutorialText', $mic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <!--deletar texto-->
    </form>
    @endif
    <!--Video-->
    @elseif ($mic->video !== null)
    <div class="row">
        <div class="col-6">
            <video class="rounded" width="400" class="video-fluid z-depth-1" controls preload="auto">
                <source src="{{ $mic->video }}" type="video/mp4">
            </video>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <div><span class="badge rounded-pill bg-primary text-dark">Posição: {{ $mic->position }}</span></div>
        </div>
    </div>
    @if (Auth::id() == $tutorial->user_id)
    <br>
    <button form="edit{{$mic->id}}" type="submit" class="btn btn-primary text-dark"><i class='bx bxs-edit'></i></button>
    <button form="delete{{$mic->id}}" type="submit" class="btn btn-danger text-dark"><i class='bx bxs-trash'></i>
    </button>
    <form id="delete{{$mic->id}}" action="{{ route('deleteTutorialVideo', $mic->id) }}" method="POST">
        @csrf
        @method('DELETE')
    </form>
    <form id="edit{{$mic->id}}" action="{{ route('editTutorialVideo', $mic->id) }}" method="get">
        @csrf
    </form>

    @endif
    <!--image-->
    @else
    <div class="row">
        <div class="col-6">
            <img class="rounded" src="{{ $mic->image }}" width="400">
        </div>
        <div class="col-6 d-flex justify-content-end">
            <div><span class="badge rounded-pill bg-primary text-dark">Posição: {{ $mic->position }}</span></div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <div class="col-12">
            @if (Auth::id() == $tutorial->user_id)
            <a href="{{ route('editTutorialImage', $mic->id) }}"><button type="submit"
                    class="btn btn-primary text-dark"><i class='bx bxs-edit'></i></button></a>
            <button form="image{{$mic->id}}" type="submit" class="btn btn-danger text-dark"><i
                    class='bx bxs-trash'></i></button>
            @endif
        </div>
    </div>
    <form id="image{{$mic->id}}" action="{{ route('deleteTutorialImage', $mic->id) }}" method="POST">
        @csrf
        @method('DELETE')
    </form>
    @endif
    <br>
    <hr>
    @endforeach
    @if (Auth::id() == $tutorial->user_id)
    <a href="{{ route('newTutorialText', $tutorial->id) }}"> <button class="btn btn-primary text-dark"><b><i
                    class='bx bx-list-plus'></i> Novo texto</b> </button></a>
    <a href="{{ route('newTutorialImage', $tutorial->id) }}"> <button class="btn btn-primary text-dark"><b><i
                    class='bx bxs-image-add'></i> Nova imagem</b> </button></a>
    <a href="{{ route('newTutorialVideo', $tutorial->id) }}"> <button class="btn btn-primary text-dark"><b><i
                    class='bx bxs-video-plus'></i> Novo vídeo</b> </button></a>
    @endif
    {{-- seção de comentários --}}
    <hr class="divider text-white">
    <h1>Comentários:</h1>
    <form method="post" id="comment" action="{{ route('insertTutorialComment', $tutorial->id) }}">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1"><i
                    class='bx bxs-comment-dots'></i></span><textarea maxlength="450"
                class="form-control form-control bg-dark text-white" name="text" required></textarea> <button
                form="comment" type="submit" class="btn btn-primary text-dark"><i class='bx bxs-send'></i></button>
        </div>
    </form><br>
    
    <div class="container border border-primary rounded-3 text-white"  style="background-color: rgb(24, 24, 24);">

        @foreach ($comments as $comment)
        <div style="margin: 10px">
            <div class="row" >

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
<hr>


{{--}} <table>
    <tr>
        <td><img class="rounded-circle" src="{{ $comment->user->picture }}" width="50"> </td>
        <td> <a style="margin-left: 6px" href="{{route('user',$comment->user->id)}}">{{ $comment->user->nick
                }}</a></td>
                <h6>Postado: {{ $comment->created_at->format('d/m/y - H:i') }}</h6>
        @if ($comment->user_id == Auth::id())
        <td>
            <a href="{{ route('editTutorialComment', $comment->id) }}"><button class="btn btn-primary text-dark"
                    style="margin-right: 6px; margin-left: 6px;"><i class='bx bxs-edit'></i></button> </a>
        </td>
        <td>
            <form method="post" action="{{ route('DeleteTutorialComment', $comment->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-dark"><i class='bx bxs-trash'></i></button>
            </form>
        </td>
        @endif
    </tr>
</table>
<p>{{ $comment->comment }}</p>
<hr>--}}


@endsection
{{-- foto, nick(link), data/modificação, texto, like e deslike --}}