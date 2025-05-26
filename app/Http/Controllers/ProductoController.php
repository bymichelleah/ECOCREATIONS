<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('frontend.productos', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::with('categoria')->findOrFail($id);
        return view('frontend.detalle_productos', compact('producto'));
    }

    public function porCategoria($id){
        $categoria = Categoria::findOrFail($id);
        $productos = Producto::where('id_categoria', $id)->get();

        return view('frontend.productos', compact('productos', 'categoria'));
    }
}
