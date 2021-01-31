@extends('plantilla')

@section('titulo', 'inicio')

@section('contenido')
    <h1 class="m-3"> Página de inicio </h1>
    <p class="ml-3">Bienvenido/a al blog</p>
    @if(auth()->check())
        <p class="ml-3">Bienvenido/a {{ auth()->user()->login }}</p>
    @endif
@endsection
