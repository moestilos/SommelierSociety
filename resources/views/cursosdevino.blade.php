@extends('layouts.app')

@section('title', 'Cursos de Vino')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Vino</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center text-white">Cursos de Vino</h1>
        <div class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
            <ul>
                <li class="mb-4">
                    <h2 class="text-xl font-bold">Curso de Cata de Vinos</h2>
                    <p>Fecha: 2023-11-05</p>
                    <p>Descripción: Aprende a catar vinos como un profesional.</p>
                    <p>Ubicación: Bodega La Rioja</p>
                </li>
                <li class="mb-4">
                    <h2 class="text-xl font-bold">Curso de Maridaje</h2>
                    <p>Fecha: 2023-11-12</p>
                    <p>Descripción: Descubre cómo combinar vinos y alimentos.</p>
                    <p>Ubicación: Restaurante El Gourmet</p>
                </li>
                <li class="mb-4">
                    <h2 class="text-xl font-bold">Curso de Vinos Españoles</h2>
                    <p>Fecha: 2023-11-19</p>
                    <p>Descripción: Conoce los mejores vinos de España.</p>
                    <p>Ubicación: Bodega Ribera del Duero</p>
                </li>
                <li class="mb-4">
                    <h2 class="text-xl font-bold">Curso de Vinos Italianos</h2>
                    <p>Fecha: 2024-02-10</p>
                    <p>Descripción: Descubre los vinos más destacados de Italia.</p>
                    <p>Ubicación: Bodega Toscana</p>
                </li>
                <li class="mb-4">
                    <h2 class="text-xl font-bold">Curso de Vinos Franceses</h2>
                    <p>Fecha: 2024-03-15</p>
                    <p>Descripción: Aprende sobre los vinos más famosos de Francia.</p>
                    <p>Ubicación: Bodega Burdeos</p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
