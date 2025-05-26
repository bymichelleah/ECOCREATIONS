<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Carrito extends Component
{
    protected $listeners = ['agregarAlCarrito'];
    public $pro = [];
    public $total = 0;
    public $cantidadTotal = 0;
    public $subtotalGeneral = 0;

    public function mount()
    {
        $this->pro = session("carrito", []);
        $this->calcularTotales();
    }

    public function agregarAlCarrito($id)
    {
        $carrito = session("carrito", []);

        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $producto = Producto::findOrFail($id);
            $carrito[$id] = [
                'url_imagen' => $producto->url_imagen,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
                'cantidad' => 1
            ];
        }

        session(['carrito' => $carrito]);
        $this->pro = $carrito;
        $this->calcularTotales();
        $this->dispatch('carritoActualizado');
    }

    public function aumentarCantidad($id)
    {
        $carrito = session("carrito", []);
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
            session(['carrito' => $carrito]);
            $this->pro = $carrito;
            $this->calcularTotales();
            $this->dispatch('carritoActualizado');
        }
    }

    public function disminuirCantidad($id)
    {
        $carrito = session("carrito", []);
        if (isset($carrito[$id]) && $carrito[$id]['cantidad'] > 1) {
            $carrito[$id]['cantidad']--;
            session(['carrito' => $carrito]);
            $this->pro = $carrito;
            $this->calcularTotales();
            $this->dispatch('carritoActualizado');
        }
    }

    public function eliminarProducto($id)
    {
        $carrito = session("carrito", []);
        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session(['carrito' => $carrito]);
            $this->pro = $carrito;
            $this->calcularTotales();
            $this->dispatch('carritoActualizado');
        }
    }

    public function calcularTotales()
    {
        $this->total = 0;
        $this->cantidadTotal = 0;
        $this->subtotalGeneral = 0;

        foreach ($this->pro as $item) {
            $subtotal = $item['precio'] * $item['cantidad'];
            $this->subtotalGeneral += $subtotal;
            $this->cantidadTotal += $item['cantidad'];
        }

        
        $this->total = $this->subtotalGeneral;
    }

    public function render()
    {
        return view('livewire.carrito');
    }
}

