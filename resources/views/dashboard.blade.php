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

        .chat-messages div {
            color: rgba(0, 0, 0, 0.388);
        }
        .chat-input input {
            color: rgba(0, 0, 0, 0.268); 
        }
        .bg-opacity-60 {
            background-color: rgba(31, 41, 55, 0.1); 
        }
        .bg-opacity-40 {
            background-color: rgba(31, 41, 55, 0.05); 
        }
    </style>
    <title>Vinos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/FondoClaro.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <!-- CAJAS DE CATEGORÍAS -->
    <!-- CAJA 1 -->
    <section class="text-white-400 body-font flex-grow">
        <div class="container px-5 py-24 mx-auto flex justify-center">
            <div class="flex flex-wrap -m-2 justify-center">

                <!-- CAJA 2 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Cursos de Sommelier</h1>
                        <img src="{{ asset('img/bodega.jpeg') }}" alt="Bodega"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Photo booth fam kinfolk cold-pressed sriracha
                            leggings jianbing microdosing tousled waistcoat.</p>
                        <a href="{{ url('/cursos') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- CAJA 4 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-40 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Catas de Vino</h1>
                        <img src="{{ asset('img/vinocur.jpeg') }}" alt="Tuzorra"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Photo booth fam kinfolk cold-pressed sriracha
                            leggings jianbing microdosing tousled waistcoat.</p>
                        <a href="{{ url('/catasdevino') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- CAJA 3 -->
                <div class="p-2 lg:w-1/4 md:w-1/2">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="h-full bg-gray-800 bg-opacity-60 px-4 pt-8 pb-12 rounded-lg overflow-hidden text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h1 class="title-font sm:text-xl text-lg font-medium text-white mb-3">Reseñas</h1>
                        <img src="{{ asset('img/resenas.jpeg') }}" alt="Tuzorra"
                            class="w-full h-40 object-cover mb-4 rounded">
                        <p class="leading-relaxed mb-3 text-white mb-1">Photo booth fam kinfolk cold-pressed sriracha
                            leggings jianbing microdosing tousled waistcoat.</p>
                        <a href="{{ url('/resenas') }}" class="text-yellow-400 inline-flex items-center">
                            Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
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

