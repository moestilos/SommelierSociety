<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CursosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cursos')->insert([
            [
                'nombre' => 'Iniciación a los vinos',
                'descripcion_breve' => 'Curso de Iniciación a los vinos, para ampliar conocimientos básicos sobre la elaboración de los diferentes vinos y el aprendizaje en cata de los vinos.',
                'descripcion' => 'Curso dedicado a introducirnos en el mundo del vino en el que descubriremos las diferencias entre los vinos más conocidos en el mercado, su proceso de elaboración, iniciación a las diferentes variedades de uva más importantes e iniciaremos la técnica básica de la cata de vinos. El curso está estructurado en dos bloques con 4 partes cada uno, cultura del vino, viticultura, elaboración y cata. Se realiza de forma presencial con un total de 5 horas, donde nos introduciremos en los inicios del vino. No se necesitan conocimientos previos para la realización del curso. 12 plazas disponibles.',
                'contenidos' => 'Cultura del vino, Viticultura, Elaboración, Cata sistemática, Maridajes, Cata de 6 vinos nacionales e internacionales',
                'modalidad' => 'Curso presencial',
                'duracion' => 5,
                'lugar' => 'Avda. San Francisco Javier,9, Sevilla',
                'coste' => 85.00,
                'idioma' => 'Castellano',
                'plazas_disponibles' => 12,
            ],
            [
                'nombre' => 'Especialista en vinos',
                'descripcion_breve' => 'Curso de mayor profundidad y especialización en vinos con mayores contenidos acerca de elaboración, regiones, viticultura, enología y cata.',
                'descripcion' => 'Curso de especialización en vinos con conocimientos técnicos y más profundos, donde nos introduciremos en regiones vinícolas más relevantes sus variedades de uvas más importantes, sus estilos y elaboración. El curso está estructurado en dos bloques con 5 partes cada uno, historia del vino, viticultura, enología, geografía vinícola y cata sistemática. Se realiza de forma presencial con un total de 30 horas, dividido en dos días, 5 horas cada uno, 6 días en total, donde nos introduciremos en los inicios del vino. No se necesitan conocimientos previos para la realización del curso, el curso está planteado para comenzar en los fascinantes estudios sobre el mundo del vino y su especialización. 12 plazas disponibles.',
                'contenidos' => 'Cultura del vino, Viticultura, Enología, Geografía vinícola, Cata sistemática, Maridajes, Cata de más de 20 vinos nacionales e internacionales',
                'modalidad' => 'Curso presencial',
                'duracion' => 30,
                'lugar' => 'Avda. San Francisco Javier,9, Sevilla',
                'coste' => 260.00,
                'idioma' => 'Castellano',
                'plazas_disponibles' => 12,
            ],
            [
                'nombre' => 'Curso de vinos internacionales',
                'descripcion_breve' => 'Curso avanzado especializado en vinos internacionales. Geografía vinícola internacional, enología, viticultura y sistema de cata.',
                'descripcion' => 'Curso de especialización en vinos internacionales con conocimientos técnicos y más profundos, donde nos introduciremos en regiones vinícolas más relevantes sus variedades de uvas más importantes, sus estilos y elaboración. El curso está estructurado en dos bloques con 5 partes cada uno, historia del vino, viticultura, enología, geografía vinícola y cata sistemática. Se realiza de forma presencial con un total de 10 horas, dividido en dos días, 5 horas cada uno, donde nos introduciremos en los inicios del vino. No se necesitan conocimientos previos para la realización del curso, el curso está planteado para comenzar en los fascinantes estudios sobre el mundo del vino y su especialización. 12 plazas disponibles.',
                'contenidos' => 'Cultura del vino, Viticultura, Enología, Geografía vinícola, Cata sistemática, Maridajes, Cata de 12 vinos internacionales',
                'modalidad' => 'Curso presencial',
                'duracion' => 10,
                'lugar' => 'Avda. San Francisco Javier,9, Sevilla',
                'coste' => 140.00,
                'idioma' => 'Castellano',
                'plazas_disponibles' => 12,
            ],
            [
                'nombre' => 'Especialización en cata de vinos',
                'descripcion_breve' => 'Curso avanzado especializado en vinos internacionales. Geografía vinícola internacional, enología, viticultura y sistema de cata.',
                'descripcion' => 'Curso de especialización en vinos internacionales con conocimientos técnicos y más profundos, donde nos introduciremos en regiones vinícolas más relevantes sus variedades de uvas más importantes, sus estilos y elaboración. El curso está estructurado en el desarrollo dinámico de la cata sistemática en la que practicaremos las diferentes técnicas a lo largo del curso. Se realiza de forma presencial con un total de 10 horas, dividido en dos días, 5 horas cada uno, donde nos introduciremos en la cata más profesional. No se necesitan conocimientos previos para la realización del curso, el curso está planteado para comenzar en los fascinantes estudios sobre el mundo del vino y su especialización. 12 plazas disponibles.',
                'contenidos' => 'Desarrollo de la metodología de cata, Los sentidos, El color del vino, Las características del aroma, El gusto, El final, Cata sistemática de más de 12 vinos.',
                'modalidad' => 'Curso presencial',
                'duracion' => 10,
                'lugar' => 'Avda. San Francisco Javier,9, Sevilla',
                'coste' => 140.00,
                'idioma' => 'Castellano',
                'plazas_disponibles' => 12,
            ],
            [
                'nombre' => 'Especialización en vinos espumosos',
                'descripcion_breve' => 'Curso especializado en vinos espumosos, conocimientos de elaboración y cata de los diferentes espumosos.',
                'descripcion' => 'Curso de especialización en la descripción de los diferentes procesos y técnicas para la elaboración de los vinos espumosos de todo el mundo, en este curso veremos los diferentes espumosos, sus características principales, así como sus diferencias a nivel técnico y analítico. Daremos un giro a las principales regiones productoras de espumosos con sus variedades de uvas y técnicas de vinificación y viticultura de la zona. El curso consta de 10 horas en 2 días, donde podremos ver la técnica de elaboración de los espumosos y sus características. 12 plazas disponibles.',
                'contenidos' => 'Breve introducción e historia de los vinos espumosos, La vinificación y principales variedades para los espumosos, El método tradicional, Otros métodos, Principales regiones de los espumosos, Cata sistemática de los espumosos, Maridajes.',
                'modalidad' => 'Curso presencial',
                'duracion' => 10,
                'lugar' => 'Avda. San Francisco Javier,9, Sevilla',
                'coste' => 140.00,
                'idioma' => 'Castellano',
                'plazas_disponibles' => 12,
            ],
        ]);
    }
}
