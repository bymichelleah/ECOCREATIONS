<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $textiles = Categoria::where('nombre', 'Textiles')->first();
        $articulos = Categoria::where('nombre', 'Artículos')->first();
        $envases = Categoria::where('nombre', 'Envases')->first();
        $accesorios = Categoria::where('nombre', 'Accesorios')->first();


        DB::table('productos')->insert([
            //Productos textiles
            [
                'nombre' => 'Bolso personalizado',
                'descripcion' => 'Bolso ecológico de tela',
                'url_imagen' => 'img/productos/textiles/textil01.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 20.00,
                'stock' => 15,
                'id_categoria' => $textiles->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Cartera personalizada',
                'descripcion' => 'Cartera con asa ecológico',
                'url_imagen' => 'img/productos/textiles/textil02.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 17.00,
                'stock' => 11,
                'id_categoria' => $textiles->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Mini Cartera',
                'descripcion' => 'Cartera de mano ecológico',
                'url_imagen' => 'img/productos/textiles/textil03.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 25.20,
                'stock' => 20,
                'id_categoria' => $textiles->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Bolso estampado',
                'descripcion' => 'Bolso ecológico con asa',
                'url_imagen' => 'img/productos/textiles/textil04.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 17.50,
                'stock' => 12,
                'id_categoria' => $textiles->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            //productos articulos

            [
                'nombre' => 'Set house',
                'descripcion' => 'Tazas personalizadas',
                'url_imagen' => 'img/productos/articulos/articulos01.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 20.50,
                'stock' => 15,
                'id_categoria' => $articulos->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'EcoBox Multiusos',
                'descripcion' => 'Set ecológico de regalo',
                'url_imagen' => 'img/productos/articulos/articulos02.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 25.50,
                'stock' => 24,
                'id_categoria' => $articulos->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Regalo personalizado',
                'descripcion' => 'Llavero personalizado',
                'url_imagen' => 'img/productos/articulos/articulos03.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 20.50,
                'stock' => 16,
                'id_categoria' => $articulos->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Set house',
                'descripcion' => 'Set para cocina',
                'url_imagen' => 'img/productos/articulos/articulos04.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 20.00,
                'stock' => 15,
                'id_categoria' => $articulos->id,
                'created_at' => now(),
                'updated_at' => now()
            ],

            //productos envases

            [
                'nombre' => 'EcoBox Multiusos',
                'descripcion' => 'Envase ecológico de cartón',
                'url_imagen' => 'img/productos/envases/envases01.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 20.00,
                'stock' => 21,
                'id_categoria' => $envases->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'EcoBox Multiusos',
                'descripcion' => 'Envase ecológico fresh',
                'url_imagen' => 'img/productos/envases/envases02.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 16.00,
                'stock' => 25,
                'id_categoria' => $envases->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'EcoBox Multiusos',
                'descripcion' => 'Cajita ecológico Meleaf',
                'url_imagen' => 'img/productos/envases/envases03.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 24.50,
                'stock' => 14,
                'id_categoria' => $envases->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'EcoBox Multiusos',
                'descripcion' => 'Cajita ecológica Gud Day',
                'url_imagen' => 'img/productos/envases/envases04.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 16.00,
                'stock' => 11,
                'id_categoria' => $envases->id,
                'created_at' => now(),
                'updated_at' => now()
            ],

            //productos accesorios

            [
                'nombre' => 'Compartible NICE',
                'descripcion' => 'Pulseras personalizables',
                'url_imagen' => 'img/productos/accesorios/accesorios01.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 10.00,
                'stock' => 19,
                'id_categoria' => $accesorios->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Compartible NICE',
                'descripcion' => 'Pulsera TOP',
                'url_imagen' => 'img/productos/accesorios/accesorios02.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 23.00,
                'stock' => 18,
                'id_categoria' => $accesorios->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Compartible NICE',
                'descripcion' => 'Llavero de maderita',
                'url_imagen' => 'img/productos/accesorios/accesorios03.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 13.00,
                'stock' => 13,
                'id_categoria' => $accesorios->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Compartible NICE',
                'descripcion' => 'Aretes personalizados',
                'url_imagen' => 'img/productos/accesorios/accesorios04.png',
                'imagen1' => 'img/productos/galeria.png',
                'imagen2' => 'img/productos/galeria.png',
                'imagen3' => 'img/productos/galeria.png',
                'precio' => 15.50,
                'stock' => 29,
                'id_categoria' => $accesorios->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
