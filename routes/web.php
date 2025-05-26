<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::view('/', 'frontend.inicio')->name('inicio');
Route::view('/nosotros', 'frontend.nosotros')->name('nosotros');
Route::get('/productos', [ProductoController::class, 'index']) ->name('productos');;
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.detalle');
Route::get('/categoria/{id}', [ProductoController::class, 'porCategoria'])->name('productos.categoria');
Route::get('/detalle_producto', function(){
    return view('detalle_productos');
});
Route::get('/carrito_de_compras', function () {
    return view('frontend.carrito_de_compras');})->name('carrito_de_compras');
Route::view('/contacto', 'frontend.contacto')->name(('contacto'));
Route::view('/login', 'frontend.login')->name('login');
Route::view('/procesar_compra', 'frontend.procesar_compra')->name('procesar_compra');
Route::view('/compra_finalizada', 'frontend.compra_finalizada')->name('compra_finalizada');
Route::post('/realizar_pedido', [PedidoController::class, 'store'])->name('pedido.store');
Route::post('/contacto', [ContactoController::class, 'enviarFormulario'])->name('contacto.enviar');