<div style="position: relative; display: inline-block;">
    <a href="#carritoModal">
        <img src="{{ asset('img/layouts/bxs-cart-alt.svg.png') }}" alt="cart">
        @if($cantidad > 0)
            <span class="contador-carrito">{{ $cantidad }}</span>
        @endif
    </a>
</div>

