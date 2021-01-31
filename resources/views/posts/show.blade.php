@extends('plantilla')

@section('titulo', "Ficha post $post->id")

@section('contenido')
    <h1 class="m-3"> {{ $post->titulo }} </h1>
    <p class="m-3" style="width: 28rem;">
        {{ $post->contenido }}
    </p>
    <p class="m-3">
        {{ $fecha }} -- {{ $hora }}
    </p>

    {{-- <form class="d-inline" action="{{ route('modificarPrueba', $post) }}" method="GET">
        @csrf
        <button class="ml-3 btn btn-warning">Editar</button>
    </form> --}}

    <form class="d-inline" action="{{ route('post.destroy', $post) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="ml-3 btn btn-danger">Borrar</button>
    </form>

    <a class="btn btn-warning" href="{{ route('post.edit', $post) }}">Editar</a>

    <h3 class="m-3">Comentarios</h3>
    @foreach ($comentarios as $comentario)
        <div class="card m-3">
            <h5 class="card-header">Usuario {{ $comentario->user_id }}</h5>
            <div class="card-body">
                <p class="card-text">{{ $comentario->contenido }}</p>
                <hr>
                <p class="mb-0">{{ $comentario->created_at->format("d-m-Y") }}</p>
            </div>
        </div>
    @endforeach

@endsection
