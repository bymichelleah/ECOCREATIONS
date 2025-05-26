@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<section class="container">
    <section class="auth-container">
        <div class="form-section">
            <img src="{{ asset('img/login/logo-login.png') }}" alt="EcoCreations Logo" class="logo">
            <h1>ECOCREATIONS</h1>
            <h2>PRODUCTOS PERSONALIZADOS</h2>

            <form method="POST" action="" class="login-form">
                @csrf

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre" required>

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ingrese apellido" required>

                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" placeholder="Ingrese correo" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingrese contraseña" required>

                <div class="remember-container">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Recordar contraseña</label>
                </div>

                <button type="submit" class="btn-submit">Iniciar Sesión</button>
            </form>
        </div>

        <aside class="promo-section">
            <img src="{{ asset('img/login/login.png') }}" alt="Productos ecológicos personalizados" class="promo-image">
        </aside>
    </section>
</section>
@endsection