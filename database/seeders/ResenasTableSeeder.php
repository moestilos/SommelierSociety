<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResenasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('resenas')->insert([
            [
                'name' => 'Juan Pérez',
                'review' => 'Excelente experiencia, los vinos fueron increíbles.',
                'stars' => 5, // Agregar valor de estrellas
                'image' => '\img\lkoWTXvaZrE.jpg', // Agregar valor de imagen
            ],
            [
                'name' => 'María López',
                'review' => 'Me encantó la cata de vinos, muy recomendable.',
                'stars' => 4, // Agregar valor de estrellas
                'image' => '\img\lkoWTXvaZrE.jpg', // Agregar valor de imagen
            ],
            [
                'name' => 'Carlos García',
                'review' => 'Una experiencia única, volveré sin duda.',
                'stars' => 5, // Agregar valor de estrellas
                'image' => '\img\lkoWTXvaZrE.jpg', // Agregar valor de imagen
            ],
        ]);
    }
}
