<article class="product">
    <a href="{{ route('producto.detalle', $product->id) }}">
        <img src="{{ asset($product->url_imagen) }}" alt="{{ $product->nombre}}">
    </a>
    <p>{{ $product->nombre }}</p>
    <h4>{{ $product->descripcion }}</h4>
    <div class="precio-product">
        <p>s/{{ $product->precio }}</p>
        <div wire:click="enviarId({{$product->id}})" class="add-product" >
            <p>Add to cart</p>
        </div>
    </div>
</article>