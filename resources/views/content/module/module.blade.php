@extends('layouts.app')
@section('content')
    <h1>{{ $module->name }}</h1>
    <img src="{{ $module->thumbnail }}">
    <p>Criado por: <a href="{{ route('user', $module->user_id) }}">{{ $module->user->nick }}</a></p>
    <p>{{ $module->description }}</p>
    <hr>
    <hr>
    {{-- seção de comentários --}}
    <h1>Comentários:</h1>
    <form method="post" action="{{ route('insertModuleComment', $module->id) }}">
        @csrf
        <label>Novo Comentário:</label><textarea name="text"></textarea><input type="submit" value="Publicar">
    </form>
    @foreach ($comments as $comment)
        <table>
            <tr>
                <td><img src="{{ $comment->user->picture }}" width="100"></td>
                <td>{{ $comment->user->nick }}</td>
                <td>{{ $comment->created_at->format('d/m/y - H:i') }}</td>
                @if ($comment->user_id == Auth::id())
                    <td><a href="{{ route('editModuleComment', $comment->id) }}">Editar</a></td>
                    <td>
                        <form method="post" action="{{ route('DeleteModuleComment', $comment->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                @endif
            </tr>
        </table>
        <p>{{ $comment->comment }}</p>
        <hr>
    @endforeach
@endsection
