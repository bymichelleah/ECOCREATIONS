@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/detalle_producto.css') }}">
@endsection

@section('content')
    <section class="detalle-de-producto">
    <section class="image-detalle-product">
        <section class="gallery-product">
            <img src="{{ asset('img/productos/galeria.png')}}" alt="">
            <img src="{{ asset('img/productos/galeria.png')}}" alt="">
            <img src="{{ asset('img/productos/galeria.png')}}" alt="">
        </section>
        <section class="image-principal-product">
            <img src="{{ asset($producto->url_imagen) }}" alt="">
        </section>
    </section>
    <section class="information-product">
        <p>{{$producto->nombre}}</p>
        <h2>{{$producto->descripcion}}</h2>
        <h3>s/{{$producto->precio}}</h3>
        <p>Categoría: {{$producto->categoria->nombre}}</p>
        <p>stock: {{$producto->stock}}</p>
        <div class="button-product">
        <a href="{{ route('carrito_de_compras') }}">Añadir al carrito</a>
        </div>
    </section>
    </section>
@endsection