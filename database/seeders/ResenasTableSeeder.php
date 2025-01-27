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
                'stars'=> '3',
            ],
            [
                'name' => 'María López',
                'review' => 'Me encantó la cata de vinos, muy recomendable.',
                'stars'=> '5',
            ],
            [
                'name' => 'Carlos García',
                'review' => 'Una experiencia única, volveré sin duda.',
                'stars'=> '4',
            ],
        ]);
    }
}
