<?php

namespace Database\Seeders;

use App\Models\Resena;
use Illuminate\Database\Seeder;

class ResenasTableSeeder extends Seeder
{
    public function run()
    {
        $resenas = [
            [
                'name' => 'Juan Pérez',
                'review' => 'Excelente experiencia, los vinos fueron increíbles.',
                'stars' => 5,
                'image' => 'resenas/default-avatar.jpg',
            ],
            [
                'name' => 'María López',
                'review' => 'Me encantó la cata de vinos, muy recomendable.',
                'stars' => 4,
                'image' => 'resenas/default-avatar.jpg',
            ],
            [
                'name' => 'Carlos García',
                'review' => 'Una experiencia única, volveré sin duda.',
                'stars' => 5,
                'image' => 'resenas/default-avatar.jpg',
            ],
        ];

        foreach ($resenas as $resena) {
            Resena::create($resena);
        }
    }
}