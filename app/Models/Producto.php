<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'url_imagen','imagen1', 'imagen2', 'imagen3', 'precio', 'stock', 'id_categoria'];
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}

