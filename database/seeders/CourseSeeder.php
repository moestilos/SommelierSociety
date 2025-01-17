<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'name' => 'Introducción al Vino',
            'description' => 'Curso básico sobre el mundo del vino.',
            'enrolled_students' => 5,
            'total_hours' => 10,
            'max_students' => 20,
        ]);

        Course::create([
            'name' => 'Cata de Vinos',
            'description' => 'Aprende a catar vinos como un experto.',
            'enrolled_students' => 8,
            'total_hours' => 15,
            'max_students' => 25,
        ]);
    }
}
