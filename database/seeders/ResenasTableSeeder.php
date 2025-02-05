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
                'stars' => 5,
                'image' => 'resenas/lkoWTXvaZrE.jpg',
                'likes' => 0,
            ],
            [
                'name' => 'María López',
                'review' => 'Me encantó la cata de vinos, muy recomendable.',
                'stars' => 4,
                'image' => 'resenas/lkoWTXvaZrE.jpg',
                'likes' => 0,
            ],
            [
                'name' => 'Carlos García',
                'review' => 'Una experiencia única, volveré sin duda.',
                'stars' => 5,
                'image' => 'resenas/lkoWTXvaZrE.jpg',
                'likes' => 0,
            ],
        ]);
    }
}