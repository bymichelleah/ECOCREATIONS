<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert(
            [
                ['nombre' => 'Textiles', 'descripcion' => 'Productos fabricados con telas o fibras'],
                ['nombre' => 'Artículos', 'descripcion' => 'Objectos diversos de uso cotidiano'],
                ['nombre' => 'Envases', 'descripcion' => 'Recipientes diseñados para conservar productos'],
                ['nombre' => 'Accesorios', 'descripcion' => 'Accesorios y acompañamientos de estilo'],
            ]
        );
    }
}
