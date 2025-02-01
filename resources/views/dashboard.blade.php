@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=EB+Garamond:wght@400;500;600&family=Jaro:opsz@6..72&family=Sofadi+One&display=swap');
        body {
    background: linear-gradient(to bottom, black, #510303, black);
}
        .font-amatic {
            font-family: 'Amatic SC', cursive;
        }
        
        .font-garamond {
            font-family: 'EB Garamond', serif;
        }

        .hover-tilt {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-tilt:hover {
            transform: perspective(1000px) rotateX(2deg) rotateY(2deg) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .price-badge {
            background: linear-gradient(45deg, #b45309, #d97706);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-br from-black via-red-800 to-black">

    <!-- CAJAS DE CATEGORÍAS -->
    <!-- CAJA 1 -->
    <section class="text-white-400 body-font flex-grow">
        <div class="container px-5 py-24 mx-auto flex justify-center">
            <div class="flex flex-wrap -m-2 justify-center">

                <!-- CAJA 2 -->
                <div class="p-4 md:w-1/2 lg:w-1/3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="h-full bg-gradient-to-br from-black via-black to-red-900 backdrop-blur-lg bg-opacity-80 rounded-2xl p-6 shadow-lg hover-tilt border border-gray-100/80 transition-all duration-300">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105"
                                 src="{{ asset('img/bodega.jpeg') }}" 
                                 alt="Bodega">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Nuevo
                            </span>
                        </div>
                        <h2 class="font-amatic text-3xl font-bold text-white mb-4">Cursos de Sommelier</h2>
                        <p class="text-gray-300 font-garamond mb-6 leading-relaxed">
                            Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/cursos') }}" class="flex items-center text-amber-400 hover:text-amber-500 font-medium font-garamond">
                                Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Catas Card -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full bg-gradient-to-br from-black via-black to-red-900 backdrop-blur-lg bg-opacity-80 rounded-2xl p-6 shadow-lg hover-tilt border border-gray-100/80 transition-all duration-300">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105" 
                                src="{{ asset('img/vinocur.jpeg') }}" 
                                alt="Experiencias de Cata">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Popular
                            </span>
                        </div>
                        <h2 class="font-amatic text-3xl font-bold text-white mb-4">Catas Exclusivas</h2>
                        <p class="text-gray-300 font-garamond mb-6 leading-relaxed">
                            Eventos privados en bodegas seleccionadas. Incluye cata de 5 vinos premium y maridaje con gastronomía local.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/catasdevino') }}" class="flex items-center text-amber-400 hover:text-amber-500 font-medium font-garamond">
                                Ver calendario
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Reseñas Card -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full bg-gradient-to-br from-black via-black to-red-900 backdrop-blur-lg bg-opacity-80 rounded-2xl p-6 shadow-lg hover-tilt border border-gray-100/80 transition-all duration-300">
                        <div class="relative overflow-hidden rounded-xl mb-6">
                            <img class="w-full h-56 object-cover transform transition-all duration-500 hover:scale-105" 
                                 src="{{ asset('img/resenas.jpeg') }}" 
                                 alt="Reseñas Expertas">
                            <span class="absolute top-4 right-4 price-badge text-white px-3 py-1 rounded-full text-sm font-garamond">
                                Actualizado
                            </span>
                        </div>
                        <h2 class="font-amatic text-3xl font-bold text-white mb-4">Análisis Técnicos</h2>
                        <p class="text-gray-300 font-garamond mb-6 leading-relaxed">
                            Biblioteca completa con análisis detallados, puntuaciones y recomendaciones de maridaje actualizadas semanalmente.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <a href="{{ url('/resenas') }}" class="flex items-center text-amber-400 hover:text-amber-500 font-medium font-garamond">
                                Ver últimas reseñas
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                @if(auth()->user() && auth()->user()->is_admin)
                <!-- CAJA 5 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Panel de Control</h1>
                        <img src="{{ asset('img/controlpanel.jpg') }}" alt="Panel de Control"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Accede al panel de control para gestionar cursos, catas y más.</p>
                        <a href="{{ route('admin.panel') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>

</body>
</html>
@endsection

