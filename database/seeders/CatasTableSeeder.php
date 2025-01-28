<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('catas')->insert([
            [
                'title' => 'DEGUSTACIÓN DE VINOS Y MARIDAJES',
                'description' => 'Cata de 6 vinos acompañados de productos destacados para divertirse en la infinita combinación de los alimentos y bebidas, utilizaremos productos exclusivos para combinar con vinos nacionales como internacionales.',
                'location' => 'Bodega Nacional',
                'date' => '2025-02-05',
            ],
            [
                'title' => 'Alsacia Grand Cru',
                'description' => 'Cata de los grandes vinos alsacianos y sus variedades nobles utilizando las bodegas más emblemáticas de la región, daremos un interesante tour por la región para conocer los distintos Grand Cru y sus diferentes Terroir.',
                'location' => 'Bodega Alsacia',
                'date' => '2025-03-10',
            ],
            [
                'title' => 'Grandes vinos de Galicia',
                'description' => 'Queremos recorrer todas las regiones vinícolas de Galicia con los vinos más interesantes de la región y así trasladarnos a su clima, suelo y peculiaridades de la región.',
                'location' => 'Bodega Galicia',
                'date' => '2025-04-15',
            ],
        ]);
    }
}
