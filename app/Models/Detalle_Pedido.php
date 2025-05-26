<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Pedido extends Model
{
    protected $fillable = [
        'id_pedido', 'id_producto', 'cantidad', 'precio_unitario',
    ];
}
