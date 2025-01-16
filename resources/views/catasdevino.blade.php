<!-- resources/views/custom.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Jaro:opsz@6..72&family=Sofadi+One&family=Teko:wght@300..700&display=swap');
        </style>
    <title>Vinos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Asegúrate de compilar estilos si usas Tailwind -->
</head>
<body class="flex flex-col min-h-screen">
        <!-- ENCABEZADO DE LA PÁGINA -->
  <header class="text-gray-400 bg-black p-2 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <!-- Logo VinoA -->
              <img src="{{ asset('img/logoVinoA.png') }}" alt="Logo VinoA" class="w-10 h-10 rounded-full mr-3">
              <span class="ml-3 text-xl">South Wine Academy</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
              <a href="{{ url('/login') }}" class="mr-5 hover:text-yellow">Login</a>
              <a href="" class="mr-5 hover:text-yellow">Contact</a>
              <a href="" class="mr-5 hover:text-yellow">About Us</a>
              <a href="" class="mr-5 hover:text-yellow">Store</a>
          </nav>
      </div>
  </header>

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12">
    <h1 class="text-4xl font-bold mb-6">Catas de Vino</h1>
    <p class="text-lg mb-6">Bienvenidos a nuestra sección de catas de vino. Ofrecemos experiencias únicas para disfrutar y aprender sobre el mundo del vino.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Cata Privada</h2>
            <p class="mb-4">Disfruta de una cata personalizada en un ambiente íntimo.</p>
            <a href="#" class="text-indigo-600 hover:text-indigo-800">Más información</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Cata para Grupos</h2>
            <p class="mb-4">Perfecto para grupos que desean compartir una experiencia única.</p>
            <a href="#" class="text-indigo-600 hover:text-indigo-800">Más información</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Cata de Vinos Regionales</h2>
            <p class="mb-4">Explora los vinos locales con una cata guiada.</p>
            <a href="#" class="text-indigo-600 hover:text-indigo-800">Más información</a>
        </div>
    </div>
</div>
@endsection














  <footer class="text-gray-400 bg-black p-4 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">South Wine Academy</span>
      </a>
      <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2025 South Wine Academy —
        <a href="https://github.com/moestilos/SommelierSociety.git" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">github</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>
</html>