@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endsection

@section('content')
<section>
    <img src="{{ asset('img/nosotros/banner_nosotros.png') }}" alt="ban" width= "100%">
</section>

<section class="sec-cuatro">
        <section>
            <img class="collage" src="{{ asset('img/nosotros/acercade.png') }}" alt="mision">
        </section>
        <section class="sec-mision">
            <h2>Nuestra misión</h2>
            <p>En ECOCREATIONS S.A.C. nos dedicamos a la producción y comercialización de <br> productos ecológicos personalizados, comprometidos con el cuidado del <br> medio ambiente y la promoción de un estilo de vida sostenible. <br> Ofrecemos alternativas reutilizables y reciclables como botellas, bolsas y <br> artículos para el hogar, combinando funcionalidad, diseño y conciencia ecológica.</p>
            <div class="check">
                <span><img src="{{ asset('img/nosotros/check.png') }}" alt=""><p>Bolsas ecológicas personalizadas</p></span>
                <span><img src="{{ asset('img/nosotros/check.png') }}" alt=""><p>Vasos y botellas reutilizables personalizadas</p></span>
                <span><img src="{{ asset('img/nosotros/check.png') }}" alt=""><p>Empaques y envoltorios ecológicos</p></span>
                <span><img src="{{ asset('img/nosotros/check.png') }}" alt=""><p>Kits corporativos ecoamigables</p></span>
            </div>
        </section>

    </section>

    <section class="sec-cinco">
        <h2 class="productos"> Nuestro equipo</h2>
        <img src="{{ asset('img/nosotros/equipo.png') }}" alt="personalizados">

    </section>
@endsection