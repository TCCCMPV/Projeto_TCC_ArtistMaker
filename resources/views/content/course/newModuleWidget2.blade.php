@extends('layouts.default')
@section('content')


<div class="container mx-auto p-3 mb-5 mx-auto bg-dark rounded-3 border border-primary shadow-lg">
    <form action="{{route('insertCourseModuleWidget', $id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($widget == 1)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Seção
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif
        @if ($widget == 2)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Título
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif
        @if ($widget == 3)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivo" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white"  name="text2"
                aria-describedby="basic-addon1" required maxlength="350"></textarea>
        </div>
        @endif
        @if ($widget == 4)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivo" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png">
        </div>
        @endif
        @if ($widget == 5)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="350"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivo" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png">
        </div>
        @endif
        @if ($widget == 6)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-image-add'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivo" aria-label="" aria-describedby="basic-addon2" required
                accept=".jpg, .png">
        </div>
        @endif
        @if ($widget == 7)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Texto
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text2"
                aria-describedby="basic-addon1" required maxlength="350">
        </div>
        @endif
        @if ($widget == 8)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Texto
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="350">
        </div>
        @endif
        @if ($widget == 9)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span> <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp4">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white"  name="text2"
                aria-describedby="basic-addon1" required maxlength="350"></textarea>
        </div>
        @endif
        @if ($widget == 10)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text bg-primary text-dark" id="basic-addon2">
            <i class='bx bxs-video-plus'></i>
        </span> <input  type="file" name="src1" class="form-control bg-dark text-white"
            placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required accept=".mp4"></div>
        @endif
        @if ($widget == 11)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp4">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white"  name="text1"
                aria-describedby="basic-addon1" required maxlength="350"></textarea>
        </div>
        @endif
        @if ($widget == 12)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-video-plus'></i>
            </span>
        
        <input  type="file" name="src1" class="form-control bg-dark text-white"
            placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required accept=".mp4"></div>
        @endif
        @if ($widget == 13)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp3">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white"  name="text2"
                aria-describedby="basic-addon1" required maxlength="350"></textarea>
        </div>
        @endif
        @if ($widget == 14)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp3">
        </div>
        <div class="input-group mb-3">
                 <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Descrição
            </span>
            <textarea class="form-control form-control bg-dark text-white"  name="text1"
                aria-describedby="basic-addon1" required maxlength="350"></textarea>
        </div>
        @endif
        @if ($widget == 15)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Subtítulo
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text1"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp3">
        </div>
        @endif
        @if ($widget == 16)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon2">
                <i class='bx bxs-music'></i>
            </span>
            <input  type="file" name="src1" class="form-control bg-dark text-white"
                placeholder="Escolher arquivollçkl" aria-label="" aria-describedby="basic-addon2" required
                accept=".mp3">
        </div>
        @endif
        @if ($widget == 17)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Criar uma seção de exercícios
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif
        @if ($widget == 18)
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                Criar um título de exercícios
            </span> <input type="text" class="form-control form-control bg-dark text-white" name="text"
                aria-describedby="basic-addon1" required maxlength="150">
        </div>
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text bg-primary text-dark" id="basic-addon1">
                <i class='bx bx-filter' ></i>
            </span>
            <input type="number" name="position"  class="form-control bg-dark text-white" placeholder="Posição" aria-label="Posição" aria-describedby="basic-addon1" min="1" required>
            <input type="hidden" name="widget" value="{{$widget}}">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary text-dark"><b>Confirmar</b></button>
        </div>
    </form>
</div>
@endsection