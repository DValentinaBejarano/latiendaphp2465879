@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1>{{ $producto->nombre }}</h1>
</div>
<div class="row">
    <div class="col s8">
    <div class="card">
                <div class="card-image">
                    <style>
                        .card
                        {
                            width: 60%;
                        }
                    </style>
                    @if($producto->imagen === null)
                        <img src="{{ asset('img/No-disponible.jpg') }}" alt="">
                    @else
                        <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                    @endif
                </div> 
            </div>
    <h3>Marca: {{ $producto->marca->nombre }}</h3>
    <ul>
        <li>Precio: ${{ $producto->precio }}</li>
        <li>Descripción: {{ $producto->desc }}</li>
    </ul>
    </div>
    <div class="col s4">
        <div class="row">
            <h3>Añadir al carrito</h3>
            <div class="row">
                <form action="{{ route('cart.store') }}" method="POST"> @csrf 
                    <input type="hidden" name="prod_id" value="4">
                    <input type="hidden" name="prod_id" value="{{ $producto->id }}">
                    <input type="hidden" name="prod_nom" value="{{ $producto->nombre }}">
                    <input type="hidden" name="precio" value="{{ $producto->precio }}">
                    <div class="row">
                        <div class="col s4 input-field">
                            <select name="cantidad" id="cantidad">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="cantidad">Cantidad</label>
                        </div>
                        <div>
                        <button class="btn waves -effect waves-light #ce93d8 purple lighten-3" type="submit" name="action">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection