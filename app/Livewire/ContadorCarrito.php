<?php

namespace App\Livewire;

use Livewire\Component;

class ContadorCarrito extends Component
{
    public $cantidad = 0;

    protected $listeners = ['carritoActualizado' => 'actualizarCantidad'];

    public function mount()
    {
        $this->actualizarCantidad();
    }

    public function actualizarCantidad()
    {
        $carrito = session('carrito', []);
        $this->cantidad = collect($carrito)->sum('cantidad');
    }
    
    public function render()
    {
        return view('livewire.contador-carrito');
    }
}
