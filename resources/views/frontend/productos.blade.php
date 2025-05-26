@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endsection

@section('content')

    <section class="banner-product">
        <img src="{{ asset('img/productos/banner_productos.png')}}" alt="banner_productos">
    </section>
    <section class="category-product">
        <article class="category">
            <a href="{{ route('productos.categoria', 1)}}">Textiles</a>
            <img src="{{ asset('img/productos/bxs-t-shirt.svg.png')}}" alt="textil">
        </article>
        <article class="category">
            <a href="{{ route('productos.categoria', 2)}}">Artículos</a>
            <img src="{{ asset('img/productos/bxs-gift.svg.png')}}" alt="artículos">
        </article>
        <article class="category">
            <a href="{{ route('productos.categoria', 3)}}">Envases</a>
            <img src="{{ asset('img/productos/bxs-coffee-togo.svg.png')}}" alt="envases">
        </article>
        <article class="category">
            <a href="{{ route('productos.categoria', 4)}}">Accesorios</a>
            <img src="{{ asset('img/productos/bxs-shopping-bags.svg.png')}}" alt="envases">
        </article>
    </section>
    <section class="list-product">
        @foreach ($productos as $product)
        @livewire('product-cart', ['product' => $product])
        @endforeach
    </section>
@endsection