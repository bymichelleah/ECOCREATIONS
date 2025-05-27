<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOME</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    {{-- Aquí se inyectan los estilos específicos de cada vista --}}
    @yield('styles')

</head>

<body>
    
    <header>
        <nav class="nav-bar">
            <section class="nav-logo">
                <img src="{{ asset('img/layouts/logo.png')}}" alt="logo">
            </section>

            <!-- Botón hamburguesa para móviles -->
            <button class="hamburger" id="hamburger">
                &#9776;
            </button>

            <section class="nav-menu" id="navMenu">
                <ul class="nav-enlaces">
                    <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                    <li><a href="{{route('productos')}}">Productos</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
                </ul>
                <section class="nav-iconos">
                    <a href="{{route('login')}}"><img src="{{ asset('img/layouts/bxs-user.svg.png')}}" alt="user"></a>
                    @livewire('contador-carrito')
                </section>
            </section>
        </nav>

        <section id="carritoModal" class="modal">
            <section class="modal-contenido">
                <a href="#" class="cerrar">&times;</a>
                <h2>Mi Carrito de Compras</h2>
                @livewire('carrito')
            </section>
        </section>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <section class="sec-first">
            <img class="logo-blanco" src="{{ asset('img/layouts/logofooter.png') }}" alt="logo">
            <p>Es una empresa dedicada a la producción y comercialización de productos <br> ecológicos personalizados. Promueve el cuidado del medio ambiente <br> mediante soluciones sostenibles e innovadoras.</p>
            <img class="redes" src="{{ asset('img/layouts/icons.png') }}" alt="icons" width="130rem">
        </section>
        <section class="sec-second">
            <h3>Navegación</h3>
            <p>Inicio</p><br>
            <p>Nosotros</p><br>
            <p>Productos</p><br>
            <p>Novedades</p><br>
            <p>Contacto</p><br>
        </section>
        <section class="sec-">
            <h3>Contacto</h3>
            <p>‪‪+51 1 234 5678‬‬</p><br>
            <p>‪www.ecocreationsperu.com‬</p><br>
            <p>ecocreationsperu</p><br>
            <p>Av. Los Álamos 456, Surco, Lima, Perú</p><br>
        </section>
        <section class="sec-">
            <h3>Para más información</h3>
            <img src="{{ asset('img/layouts/input.png') }}" alt="input">
        </section>
    </footer>

    <script>
    document.getElementById('hamburger').addEventListener('click', function () {
        document.getElementById('navMenu').classList.toggle('show-menu');
    });
</script>
</body>

</html>