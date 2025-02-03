<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Estilos -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Teko:wght@300..700&display=swap');
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
    <title>@yield('title', 'South Wine Academy')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    
    @include('layouts.header')

    <main>
        @yield('content')

        <!-- Sección Contacto - Animación desde la derecha -->
        <div class="container px-5 py-12 mx-auto"
             data-aos="fade-right"
             data-aos-offset="200"
             data-aos-delay="150"
             data-aos-duration="800">
            <div class="text-right">
                <img src="{{ asset('/img/vino2.jpeg') }}" 
                     data-aos="zoom-in-left"
                     data-aos-delay="300"
                     class="mx-auto mb-4 rounded-xl shadow-lg w-1/2">
                <p class="text-white font-garamond mb-4"
                   data-aos="fade-left"
                   data-aos-delay="450">¿Deseas contactarnos? Haz clic a continuación.</p>
                <a href="{{ url('/contacto') }}" 
                   data-aos="fade-up"
                   data-aos-delay="600"
                   class="text-yellow-400 hover:text-yellow-500 font-medium">Ir a Contacto</a>
            </div>
        </div>

        <!-- Sección Reseñas - Animación desde la izquierda -->
        <div class="container px-5 py-12 mx-auto"
             data-aos="fade-left"
             data-aos-offset="200"
             data-aos-delay="150"
             data-aos-duration="800">
            <div class="text-left">
                <img src="{{ asset('/img/vino1.jpg') }}" 
                     data-aos="zoom-in-right"
                     data-aos-delay="300"
                     class="mx-auto mb-4 rounded-xl shadow-lg w-1/2">
                <p class="text-white font-garamond mb-4"
                   data-aos="fade-right"
                   data-aos-delay="450">Lee opiniones y reseñas interesantes.</p>
                <a href="{{ url('/resenas') }}" 
                   data-aos="fade-up"
                   data-aos-delay="600"
                   class="text-yellow-400 hover:text-yellow-500 font-medium">Ir a Reseñas</a>
            </div>
        </div>
    </main>
    
    <footer class="text-gray-400 wine-gradient py-2 body-font">
        <div class="container max-w-4xl px-5 py-4 mx-auto text-center">
            <p class="text-sm">© 2025 South Wine Academy</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out-quad'
        });
    </script>
    @vite(['resources/js/app.js'])
</body>

</html>
