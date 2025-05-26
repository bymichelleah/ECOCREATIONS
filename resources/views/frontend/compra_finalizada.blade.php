@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/compra_finalizada.css') }}">
@endsection

@section('content')
<section class="compra-finalizada">
    <section class="mensaje1">
        <img src="{{ asset('img/mensaje/bxs-truck.svg.png')}}" alt="">
        <div class="mensaje-contenido">
                <h1>¡Compra finalizada!</h1>
                <p>El pedido se ha registrado <br>correctamente</p>
        </div>
    </section>
    <section class="mensaje2">
        <p>¡Gracias por tu compra! Estamos preparando <br>tu pedido con mucho cuidado.</p>
    </section>
</section>
@endsection