<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'correo', 'nombres', 'apellidos', 'dni', 'telefono',
        'tipo_de_entrega', 'distrito', 'direccion', 'metodo_de_pago', 'numero_de_tarjeta',
    ];
}
