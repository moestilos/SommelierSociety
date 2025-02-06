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
            background-color: #F7E8D6; /* Fondo crema */
        }
        main {
            flex: 1;
        }
        header {
            background-color: #2B1B0D; /* Banner marrón */
        }
        footer {
            background-color: #2B1B0D; /* Opcional: usar marrón en el footer */
            color: #F7E8D6;
        }
    </style>
    <title>@yield('title', 'South Wine Academy')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
 
<body class="flex flex-col min-h-screen">
   
    @include('layouts.header')
 
    <main>
        @yield('content')



      
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            fetch('/ruta-ejemplo')
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta AJAX:', data);
                })
                .catch(error => {
                    console.error('Error en la petición:', error);
                });
        });
    </script>
    @vite(['resources/js/app.js'])
</body>
 
</html>