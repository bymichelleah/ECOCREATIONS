<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Detalle_Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function store(Request $request)
    {
        // Validar campos básicos (puedes mejorar esta validación después)
        $validated = $request->validate([
            'correo' => 'required|email',
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required',
            'telefono' => 'required',
            'tipo_de_entrega' => 'required',
            'distrito' => 'required',
            'direccion' => 'required_if:tipo_entrega,delivery',
            'metodo_de_pago' => 'required',
            'numero_de_tarjeta' => 'nullable|required_if:metodo_pago,tarjeta',
        ]);

        // Obtener carrito de la sesión
        $carrito = session('carrito', []);

        if (empty($carrito)) {
            return redirect()->back()->withErrors(['carrito' => 'El carrito está vacío']);
        }

        // Crear pedido
        $pedido = Pedido::create([
            'correo' => $validated['correo'],
            'nombres' => $validated['nombres'],
            'apellidos' => $validated['apellidos'],
            'dni' => $validated['dni'],
            'telefono' => $validated['telefono'],
            'tipo_de_entrega' => $validated['tipo_de_entrega'],
            'distrito' => $validated['distrito'],
            'direccion' => $validated['direccion'] ?? '',
            'metodo_de_pago' => $validated['metodo_de_pago'],
            'numero_de_tarjeta' => $validated['numero_de_tarjeta'] ?? '',
        ]);
        

        // Guardar detalle de pedido
        foreach ($carrito as $id_producto => $item) {
            Detalle_Pedido::create([
                'id_pedido' => $pedido->id,
                'id_producto' => $id_producto,
                'cantidad' => $item['cantidad'],
                'precio_unitario' => $item['precio'],
            ]);
        }

        // Vaciar carrito
        session()->forget('carrito');

        // Redirigir a la vista de compra finalizada
        return redirect()->route('compra_finalizada');
    }
}

