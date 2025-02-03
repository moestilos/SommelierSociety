<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

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
    </main>
    
    <footer class="text-gray-400 wine-gradient py-2 body-font">
        <div class="container max-w-4xl px-5 py-4 mx-auto text-center">
            <p class="text-sm">© 2025 South Wine Academy</p>
        </div>
    </footer>
</body>

</html>
