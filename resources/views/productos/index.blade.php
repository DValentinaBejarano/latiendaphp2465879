@extends('layouts.menu')

@section('contenido')
@if(session('mensajito'))
<div class="row">
<style>
     .row
    {
    margin-left: 24%;
    }
</style>
    <strong>
    {{ session('mensajito') }}
    <a href="{{ route('cart.index') }}">
        Ir al carrito
    </a>
</div>
@endif
<div class="row">
    <h1> Catálogo de productos </h1>
</div>
@foreach($productos as $producto)
<div class="row">
    <div class="col s8">
        <div class="card">
        <style>
            .card
            {
            width: 60%;
            }
        </style>
            <div class="card-image">
            @if($producto->imagen === null)
                <img src="{{ asset('img/No-disponible.jpg' ) }}" alt=""/>
                @else
                <img src="{{ asset('img/'.$producto->imagen ) }}" alt=""/>
                @endif
                <span class="card-title" style="color: black">{{ $producto->nombre }}
                </span>
            </div>
            <div class="card-content">
            <p> {{ $producto->desc }} </p>
            </div>
            <div class="card-action"></div>
            <a href="{{ route('productos.show', $producto->id) }}"> Ver detalles</a>
        </div>
    </div>
</div>
@endforeach
@endsection