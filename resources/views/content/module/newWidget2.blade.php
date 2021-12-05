@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form action="{{route('insertModuleWidget', $id)}}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- seção --}}
        @if ($widget == 1)
        {{-- seção --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Seção
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif

        {{-- título --}}
        @if ($widget == 2)
        {{-- título --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Título
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif

        {{-- subtítulo + imagem + descrição --}}
        @if ($widget == 3)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivo"
                aria-label="" aria-describedby="basic-addon2" required accept=".jpg, .png">
        </div>
        {{-- descrição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text2" aria-describedby="basic-addon1"
                required maxlength="350"></textarea>
        </div>
        @endif

        {{-- subtítulo + imagem --}}
        @if ($widget == 4)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivo"
                aria-label="" aria-describedby="basic-addon2" required accept=".jpg, .png">
        </div>
        @endif

        {{-- imagem + descriçãoo --}}
        @if ($widget == 5)
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivo"
                aria-label="" aria-describedby="basic-addon2" required accept=".jpg, .png">
        </div>
        {{-- descrição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text1" aria-describedby="basic-addon1"
                required maxlength="350"></textarea>
        </div>
        @endif

        {{-- imagem --}}
        @if ($widget == 6)
        {{-- imagem --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivo"
                aria-label="" aria-describedby="basic-addon2" required accept=".jpg, .png">
        </div>
        @endif

        {{-- subtítulo + texto --}}
        @if ($widget == 7)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- texto --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Texto
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text2"
                aria-describedby="basic-addon1" required maxlength="350">
        </div>
        @endif

        {{-- texto --}}
        @if ($widget == 8)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Texto
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="350">
        </div>
        @endif

        {{-- subtítulo + video + descrição --}}
        @if ($widget == 9)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- video --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp4">
        </div>
        {{-- descrição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text2" aria-describedby="basic-addon1"
                required maxlength="350"></textarea>
        </div>
        @endif

        {{-- subtítulo + vídeo --}}
        @if ($widget == 10)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- video --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span> <input type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp4">
        </div>
        @endif

        {{-- video + descrição --}}
        @if ($widget == 11)
        {{-- video --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp4">
        </div>
        {{-- descrição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text1" aria-describedby="basic-addon1"
                required maxlength="350"></textarea>
        </div>
        @endif

        {{-- video --}}
        @if ($widget == 12)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp4">
        </div>
        @endif

        {{-- subtítulo + audio + descrição --}}
        @if ($widget == 13)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- audio --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp3">
        </div>
        {{-- descrição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text2" aria-describedby="basic-addon1"
                required maxlength="350"></textarea>
        </div>
        @endif

        {{-- audio + descrição --}}
        @if ($widget == 14)
        {{-- audio --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp3">
        </div>
        {{-- descrição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text1" aria-describedby="basic-addon1"
                required maxlength="350"></textarea>
        </div>
        @endif

        {{-- subtítulo + audio --}}
        @if ($widget == 15)
        {{-- subtítulo --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        {{-- audio --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp3">
        </div>
        @endif

        {{-- audio --}}
        @if ($widget == 16)
        {{-- audio --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white" placeholder="Escolher arquivollçkl"
                aria-label="" aria-describedby="basic-addon2" required accept=".mp3">
        </div>
        @endif

        {{-- criar seção exercícios --}}
        @if ($widget == 17)
        {{-- Seção exercícios --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Criar uma seção de exercícios
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif

        {{-- criar título exercícios --}}
        @if ($widget == 18)
        {{-- criar título exercícios --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Criar um título de exercícios
            </span>
            <input type="text" class="form-control form-control bg-dark text-white" name="text"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif

        {{-- posição --}}
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-filter'></i>
            </span>
            <input type="number" name="position" class="form-control bg-dark text-white" placeholder="Posição"
                aria-label="Posição" aria-describedby="basic-addon1" min="1" required>
            {{-- id componente (escondido) --}}
            <input type="hidden" name="widget" value="{{$widget}}">
        </div>
        {{-- submit --}}
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary text-dark"><b>Confirmar</b></button>
        </div>
    </form>
</div>

@endsection