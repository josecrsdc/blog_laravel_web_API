@extends('plantilla')

@section('titulo', 'Editar post')

@section('contenido')
    <h1 class="m-3"> Editar post </h1>

    <form class="mx-3" action="{{ route('post.update', $post) }}" method="post">
        @csrf
        @method('put')
        <label>
            Titulo:
            <br>
            <input size="60" type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}">
        </label>
        @error('titulo')
            <br>
            <small class="text-danger">*{{ $message }}</small>
            <br>
        @enderror

        <br>

        <label>
            Contenido:
            <br>
            <textarea name="contenido" cols="60" rows="10">{{ old('contenido', $post->contenido) }}</textarea>
        </label>
        @error('contenido')
            <br>
            <small class="text-danger">*{{ $message }}</small>
            <br>
        @enderror

        <br>


        <button class="btn btn-success" type="submit">Actualizar formulario</button>
        <a class="btn btn-warning" href="{{ route('post.index') }}">Cancelar</a>
    </form>






@endsection

