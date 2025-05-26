@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection

@section('content')
    <section class="sec-uno">
        <section class="section-left">
            <h2>BIENVENIDOS A ECOCREATIONS S.A.C</h2>
            <p>Nos especializamos en la producción y comercialización de productos ecológicos <br>personalizados, diseñados para cuidar el planeta sin renunciar a la creatividad ni <br> a la identidad de tu marca.</p>
            <div class="botones">
                <button class="ver" type="submit">Ver productos</button>
                <button class="contacto" type="submit">Contacto</button>
            </div>
            
        </section>
        <section>
            <img class="hero" src="{{ asset('img/inicio/img1.png') }}" alt="imagen">
        </section>
    </section>
    <section>
        <img src="{{ asset('img/inicio/barra.png') }}" alt="barra" width="100%">
    </section>


    <section class="sec-tres">
        <h2>Productos más populares</h2>
        <img src="{{ asset('img/inicio/nuevo.png') }}" alt="pedidos">
    </section>

    <section class="sec-cuatro">
        <section>
            <img class="collage" src="{{ asset('img/inicio/mision.png') }}" alt="mision">
        </section>
        <section class="sec-mision">
            <h2>Nuestra misión</h2>
            <p>Ofrecer productos ecológicos personalizados que promuevan la <br>conciencia ambiental, combinando innovación, diseño y sostenibilidad.</p>
            <div class="check">
                <span><img src="{{ asset('img/inicio/check.png') }}" alt=""><p>Bolsas ecológicas personalizadas</p></span>
                <span><img src="{{ asset('img/inicio/check.png') }}" alt=""><p>Vasos y botellas reutilizables personalizadas</p></span>
                <span><img src="{{ asset('img/inicio/check.png') }}" alt=""><p>Empaques y envoltorios ecológicos</p></span>
                <span><img src="{{ asset('img/inicio/check.png') }}" alt=""><p>Kits corporativos ecoamigables</p></span>
            </div>
        </section>

    </section>

    <section class="sec-cinco">
        <h2 class="productos">Productos más populares</h2>
        <img src="{{ asset('img/inicio/personalizados.png') }}" alt="personalizados">

    </section>
@endsection