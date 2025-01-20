@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')


<!-- resources/views/custom.blade.php -->
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
        </style>
    <title>Vinos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Asegúrate de compilar estilos si usas Tailwind -->
</head>
<body class="flex flex-col min-h-screen" style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center;">
  <div class="relative w-full max-w-3xl mx-auto">
    <!-- Contenedor de imágenes -->
    <div id="carousel" class="overflow-hidden relative">
      <div class="flex transition-transform duration-500" style="transform: translateX(0);">
        <!-- Slide 1 -->
        <div class="w-full flex-shrink-0">
          <img src="https://via.placeholder.com/800x400" alt="Imagen 1" class="w-full">
          <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Título 1</h3>
            <p class="text-gray-600">Descripción para la primera imagen.</p>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="w-full flex-shrink-0">
          <img src="https://via.placeholder.com/800x400" alt="Imagen 2" class="w-full">
          <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Título 2</h3>
            <p class="text-gray-600">Descripción para la segunda imagen.</p>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="w-full flex-shrink-0">
          <img src="https://via.placeholder.com/800x400" alt="Imagen 3" class="w-full">
          <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Título 3</h3>
            <p class="text-gray-600">Descripción para la tercera imagen.</p>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Botones de navegación -->
    <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 hover:bg-gray-600">
      &lt;
    </button>
    <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 hover:bg-gray-600">
      &gt;
    </button>
  </div>
  
  <script>
    const carousel = document.getElementById("carousel").firstElementChild;
    const slides = Array.from(carousel.children);
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");
    let currentIndex = 0;
  
    const updateCarousel = () => {
      const offset = -currentIndex * 100;
      carousel.style.transform = `translateX(${offset}%)`;
    };
  
    nextButton.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % slides.length;
      updateCarousel();
    });
  
    prevButton.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      updateCarousel();
    });
  </script>
    </body>
    </html>

@endsection