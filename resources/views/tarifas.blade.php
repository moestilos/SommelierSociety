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
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=EB+Garamond:wght@400;500;600&display=swap');
        
        .font-cinzel {
            font-family: 'Cinzel Decorative', cursive;
        }
        
        .font-garamond {
            font-family: 'EB Garamond', serif;
        }

        .wine-gradient {
            background: linear-gradient(135deg, rgba(88, 28, 28, 0.95) 0%, rgba(44, 19, 19, 0.95) 100%);
        }

        .input-glow:focus {
            box-shadow: 0 0 15px rgba(149, 40, 40, 0.3);
        }

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
            width: 300px; /* Ancho fijo */
            height: 400px; /* Alto fijo */
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .course-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .course-card .buttons {
            margin-top: auto;
        }

        .carousel-button {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            padding: 10px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            transition: background 0.3s ease;
        }

        .carousel-button:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        .carousel-button.left {
            left: 10px;
        }

        .carousel-button.right {
            right: 10px;
        }
    </style>
    <title>Tarifas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 backdrop-blur-sm">
        <div class="max-w-4xl w-full space-y-8 wine-gradient rounded-xl p-10 shadow-2xl border border-amber-900/30 transition-all duration-300">
            <div class="text-center">
                <div class="mx-auto relative w-24 h-24 mb-6">
                    <div class="absolute inset-0 bg-amber-900/20 rounded-full blur-md"></div>
                    <img src="{{ asset('img/nuevoLogo.png') }}" alt="Logo" class="relative z-10 w-full h-full object-contain rounded-full border-2 border-amber-900/30">
                </div>
                <h2 class="font-cinzel text-4xl text-amber-100 mb-2">
                    South Wine Academy
                </h2>
                <p class="font-garamond text-amber-300/80 italic">
                    "Where passion meets the vine"
                </p>
            </div>

            <h1 class="text-3xl font-extrabold text-white sm:text-5xl text-center">Tarifas de Cursos</h1>
            @if(auth()->user() && auth()->user()->is_admin)
                <div class="text-center mt-4">
                    <a href="{{ route('cursos.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Añadir Curso
                    </a>
                </div>
            @endif
            <div class="relative mt-16">
                <div class="carousel flex overflow-x-auto snap-x snap-mandatory">
                    @foreach ($cursos as $curso)
                    <div class="course-card snap-center flex-shrink-0 mx-4">
                        <div>
                            <h4 class="mt-2 text-4xl font-semibold text-white">{{ $curso->nombre }}</h4>
                            <p class="mt-4 text-gray-300">{{ $curso->descripcion_breve }}</p>
                            <h4 class="mt-2 text-4xl font-semibold text-white">{{ $curso->coste }}€</h4>
                        </div>
                        <div class="buttons">
                            <button onclick="window.location.href='{{ url('/cursos/' . $curso->id) }}'" class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600">
                                Ver más
                            </button>
                            @if(auth()->user() && auth()->user()->is_admin)
                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este curso?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full px-4 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">
                                        Eliminar
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-button left" onclick="scrollCarousel(-1)">
                    &#10094;
                </button>
                <button class="carousel-button right" onclick="scrollCarousel(1)">
                    &#10095;
                </button>
            </div>
        </div>
    </div>

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