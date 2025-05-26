<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCart extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.product-cart');
    }

    public function enviarId($id)
    {
        $this->dispatch('agregarAlCarrito', $id)->to('carrito');
    }
}
