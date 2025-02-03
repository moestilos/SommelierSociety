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

        <!-- Sección Reseñas - Animación desde la izquierda -->
        <div class="container px-5 py-12 mx-auto"
             data-aos="fade-left"
             data-aos-offset="200"
             data-aos-delay="150"
             data-aos-duration="1000">
            <div class="text-left">
                <img src="{{ asset('/img/vino1.jpg') }}" 
                     data-aos="zoom-in-center"
                     data-aos-delay="500"
                     class="mx-auto mb-4 rounded-xl shadow-lg w-1/2">
                <p class="text-dark font-garamond mb-4"
                   data-aos="fade-center"
                   data-aos-delay="550">"El vino es más que una bebida; es historia, tradición y pasión embotellada. Cada sorbo nos transporta a tierras bañadas por el sol, donde las vides crecen con paciencia y esmero, esperando el momento perfecto para compartir su esencia con el mundo.

                   En [Nombre de tu web], creemos que cada botella guarda una historia, y nos sentimos honrados de haber compartido contigo este viaje por los aromas, sabores y matices que hacen del vino una experiencia única. Esperamos que cada copa que degustes sea un brindis por la vida, por los encuentros inolvidables y por los momentos que quedan grabados en el corazón.
                   
                   Sigue explorando, descubriendo y disfrutando de la magia del vino. Te esperamos en tu próxima visita, siempre con una copa lista para celebrar juntos.
                   
                   ¡Salud y hasta pronto!"</p>
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
