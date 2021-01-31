@extends('plantilla')

@section('titulo', 'Listado posts')

@section('contenido')
    <h1 class="m-3"> Listado </h1>

    {{-- <form class="d-flex justify-content-end" style="width: 930px" action="{{ route('nuevoPrueba') }}" method="GET">
        @csrf
        <button class="ml-3 btn btn-success">Crear Nuevo</button>
    </form> --}}
    <div class="d-flex justify-content-end" style="width: 930px">
        <a class="mb-3  btn btn-success" href="{{ route('post.create') }}">Crear Nuevo</a>
    </div>

    <div class="d-flex justify-content-start flex-wrap ml-3">
        @foreach ($posts as $post)
            <div class="card mr-4 mb-4" style="width: 18rem;">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $post->titulo }}</h5>
                    <p class="card-text">Autor: {{ Str::ucfirst($post->user->name) }}</p>
                    <a href="{{ route('post.show', $post) }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
