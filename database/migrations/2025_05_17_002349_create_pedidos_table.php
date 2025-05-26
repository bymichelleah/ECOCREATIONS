<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('correo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('telefono');
            $table->string('tipo_de_entrega');
            $table->string('distrito');
            $table->string('direccion');
            $table->string('metodo_de_pago');
            $table->string('numero_de_tarjeta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
