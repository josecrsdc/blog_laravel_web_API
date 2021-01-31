@extends('plantilla')

@section('titulo', 'Nuevo post')

@section('contenido')
    <h1 class="m-3"> Nuevo post </h1>

    <form class="mx-3" action="{{ route('post.store') }}" method="post">
        @csrf

        <label>
            Titulo:
            <br>
            <input  type="text" name="titulo" value="{{ old('titulo') }}">
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
            <textarea name="contenido" rows="5">{{ old('contenido') }}</textarea>
        </label>

        @error('contenido')
            <br>
            <small class="text-danger">*{{ $message }}</small>
            <br>
        @enderror
        <br>


        <button class="btn btn-success" type="submit">Enviar formulario</button>
        <a class="btn btn-warning" href="{{ route('post.index') }}">Cancelar</a>
    </form>






@endsection
