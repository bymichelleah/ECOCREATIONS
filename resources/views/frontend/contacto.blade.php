@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
@endsection

@section('content')
<section class="contacto-banner">
    <img src="{{ asset('img/contacto/ban-contacto.png') }}" alt="Banner Contacto">
</section>
<br>
    <main class="form-container">
        @if ($errors->any())
    <div class="error-mensajes">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="mensaje-exito">
        {{ session('success') }}
    </div>
@endif

        <h1>Consulta tus dudas aquí</h1>
        <form method="POST" action="{{ route('contacto.enviar') }}">
            @csrf
            <input type="text" name="nombres" placeholder="Nombres" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="tel" name="telefono" placeholder="Teléfono" required>
            <input type="text" name="asunto" placeholder="Asunto" required>
            <textarea name="mensaje" rows="4" placeholder="Mensaje" required></textarea>
            <div class="checkbox-group">
                <input type="checkbox" id="terminos" name="terminos" required>
                <label for="terminos">
                    Estoy de acuerdo con la política de privacidad y términos y condiciones.
                </label>
            </div>
            <div class="recaptcha-placeholder">
                <!-- Aquí irá el reCAPTCHA -->
                <div class="g-recaptcha" data-sitekey="6LcDEEkrAAAAAPINtXkXfiTRUceKSpHCjGtuBVVc"></div>
            </div>

            <button class="contacto-enviar" type="submit">Enviar</button>
        </form>
    </main>
    
    {{-- reCAPTCHA script (descomenta cuando actives reCAPTCHA) --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
    <div class="info-boxes-container">
    <div class="info-box">
        <div class="info-icon">
            <img src="{{ asset('img/contacto/bxs-package.svg.png') }}" alt="Icon1">
        </div>
        <h3>¿Y si cambio de opinión?</h3>
        <p>Podrás cambiar o devolver tu compra</p>
    </div>

    <div class="info-box">
        <div class="info-icon">
        <img src="{{ asset('img/contacto/bx-store.svg.png') }}" alt="Icon2">
        </div>
        <h3>Recogo en Tienda</h3>
        <p>Retira en más +70 tiendas a nivel nacional</p>
    </div>

    <div class="info-box">
        <div class="info-icon">
        <img src="{{ asset('img/contacto/bx-check-circle.svg.png') }}" alt="Icon3">
        </div>
        <h3>Revisa tu pedido</h3>
        <p>Ingresa tu N° pedido y conoce su estado.</p>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@endsection