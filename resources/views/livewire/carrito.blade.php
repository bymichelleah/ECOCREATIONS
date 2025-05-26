<section class="productos-carrito">
    <section class="contenido-scroll">
    @if($pro)
    @foreach($pro as $id => $producto)
    <article class="product-añadido">
        <section class="product-insertado">
            <img src="{{ asset($producto['url_imagen'])}}" alt="">
            <div class="product-descrip">
                <p>{{$producto["nombre"]}}</p>
                <h3>{{$producto["descripcion"]}}</h3>
            </div>
        </section>
        <div class="product-precio">
            <h3>s/{{$producto["precio"]}}</h3>
            <h4>
                <button class="contador" wire:click="disminuirCantidad({{ $id }})">-</button>
                {{ $producto["cantidad"] }}
                <button class="contador" wire:click="aumentarCantidad({{ $id }})">+</button>
            </h4>
        </div>
        <img wire:click="eliminarProducto({{ $id }})" class="icon-eliminar" src="{{ asset('img/carrito/bxs-trash.svg.png')}}" alt="icon-eliminar">
    </article>
    @endforeach
    @else
    <div>No hay productos aún</div>
    @endif
    </section>
    <section class="contenido-inferior">
        <h3 class="total-carrito">Cantidad: {{ $cantidadTotal }}</h3>
            <h3 class="total-carrito">SubTotal: {{ number_format($subtotalGeneral, 2) }}</h3>
            <h3 class="total-carrito">Total: {{ number_format($total, 2) }}</h3>
            <a class="carrito-botom" href="{{ route('procesar_compra') }}">Procesar compra</a>
    </section>
</section>
