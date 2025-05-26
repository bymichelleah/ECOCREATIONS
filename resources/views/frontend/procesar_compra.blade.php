@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/procesar_compra.css') }}">
@endsection

@section('content')
<section class="procesar-compra">
    <section class="formulario">
        <form action="{{ route('pedido.store') }}" method="POST">
            @csrf
            <section class="datos">
                <article class="datos-necesarios">
                    <p>1</p>
                    <h3>Datos Personales</h3>
                </article>
                <article>
                    <label for="correo">Correo</label><br>
                    <input type="email" name="correo" id="correo" required>
                </article>
                <article class="campos-dobles">
                    <div>
                        <label for="nombres">Nombres</label><br>
                        <input type="text" name="nombres" id="nombres" required>
                    </div>
                    <div>
                        <label for="apellidos">Apellidos</label><br>
                        <input type="text" name="apellidos" id="apellidos" required>
                    </div>
                </article>
                <article class="campos-dobles">
                    <div>
                        <label for="dni">Documentos de identidad</label><br>
                        <input type="text" name="dni" id="dni" required>
                    </div>
                    <div>
                        <label for="telefono">Móvil/teléfono</label><br>
                        <input type="text" name="telefono" id="telefono" required>
                    </div>
                </article>
            </section>
            <section class="datos">
                <article class="datos-necesarios">
                    <p>2</p>
                    <h3>Forma de entrega</h3>
                </article>
                <article class="campos-dobles">
                    <div>
                        <label for="tipo_de_entrega">Tipo de entrega</label><br>
                        <select name="tipo_de_entrega" id="tipo_de_entrega" required>
                            <option value="delivery">Delivery</option>
                            <option value="recoger">Recoger</option>
                        </select>
                    </div>
                    <div>
                        <label for="distrito">Distrito</label><br>
                        <select name="distrito" id="distrito" required>
                            <option value="miraflores">Miraflores</option>
                            <option value="san isidro">San Isidro</option>
                            <option value="surco">Surco</option>
                            <option value="la molina">La Molina</option>
                            <option value="pueblo libre">Pueblo Libre</option>
                            <option value="san borja">San Borja</option>
                        </select>
                    </div>
                </article>
                <article>
                    <label for="direccion">Dirección</label><br>
                    <input type="text" name="direccion" id="direccion" required>
                </article>
            </section>
            <section class="datos">
                <article class="datos-necesarios">
                    <p>3</p>
                    <h3>Tipo de pago</h3>
                </article>
                <article>
                    <label for="metodo_de_pago">Método de pago</label><br>
                    <select name="metodo_de_pago" id="metodo_de_pago" required>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta</option>
                    </select>
                </article>
                <article>
                    <label for="numero_de_tarjeta">Número de tarjeta</label><br>
                    <input type="text" name="numero_de_tarjeta" id="numero_de_tarjeta" required>
                </article>
            </section>
            <section class="button-enviar">
                <button type="submit">Compra realizada</button>
            </section>
        </form>
    </section>
    <section class="resumen-de-compra">
        <h1>Resumen de compra</h1>
        <section class="pedido-resumido">
            <img src="{{ asset('img/productos/galeria.png') }}" alt="">
            <div class="pedido-descripcion">
                <p>EcoBox Multiusos</p>
                <p>Cantidad: 2</p>
            </div>
        </section>
        <section>
            <div class="pedido-total">
                <p>SubTotal</p>
                <h3>79.90</h3>
            </div>
            <div class="pedido-total">
                <p>Total</p>
                <h3>79.90</h3>
            </div>
        </section>
    </section>
</section>
@endsection