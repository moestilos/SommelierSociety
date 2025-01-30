@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Jaro:opsz@6..72&family=Sofadi+One&family=Teko:wght@300..700&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Dancing+Script:wght@400..700&family=Jaro:opsz@6..72&family=Sofadi+One&family=Teko:wght@300..700&display=swap');

        .carousel {
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            overflow: hidden; /* Ocultar barra de desplazamiento */
        }

        .carousel::-webkit-scrollbar {
            display: none; /* Safari and Chrome */
        }

        .course-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
    <title>Tarifas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen items-center justify-center"
    style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center;">

    <!-- component -->
    <section class="py-8">
        <div class="container px-6 py-8 mx-auto text-center">
            <h1 class="text-3xl font-extrabold text-white sm:text-5xl">Tarifas de Cursos</h1>
            <div class="relative mt-16">
                <div class="carousel flex overflow-x-auto snap-x snap-mandatory">
                    @foreach ($cursos as $curso)
                    <div class="course-card snap-center flex-shrink-0 w-80 h-96 bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg mx-4">
                        <div>
                            <h4 class="mt-2 text-4xl font-semibold text-white">{{ $curso->nombre }}</h4>
                            <p class="mt-4 text-gray-300">{{ $curso->descripcion_breve }}</p>
                            <h4 class="mt-2 text-4xl font-semibold text-white">{{ $curso->coste }}€</h4>
                        </div>
                        <button onclick="window.location.href='{{ url('/cursos/' . $curso->id) }}'" class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600">
                            Ver más
                        </button>
                    </div>
                    @endforeach
                </div>
                <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 bg-opacity-60 text-white p-2 rounded-full focus:outline-none" onclick="scrollCarousel(-1)">
                    &#10094;
                </button>
                <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 bg-opacity-60 text-white p-2 rounded-full focus:outline-none" onclick="scrollCarousel(1)">
                    &#10095;
                </button>
            </div>
        </div>
    </section>

    <script>
        function scrollCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const scrollAmount = carousel.clientWidth * direction;
            carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    </script>
 
    <!-- PIE DE LA PÁGINA -->
    
</body>
</html>
@endsection