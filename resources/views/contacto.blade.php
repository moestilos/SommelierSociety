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
    </style>
    <title>Vinos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Asegúrate de compilar estilos si usas Tailwind -->
</head>

<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center;">

  <h2 class="text-center text-4xl font-bold tracking-tight text-white sm:text-5xl mt-24">
    
  </h2>

  <section class="text-gray-400 body-font">
    <div class="container mx-auto flex flex-wrap justify-between px-8 py-12">
      <!-- Primera caja -->
      <div class="p-4 w-full lg:w-1/2">
        <div class="flex flex-col items-center border-2 rounded-lg border-gray-800 p-8 bg-gray-800 bg-opacity-80 px-4 pt-8 pb-12 text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
          <!-- Imagen circular centrada arriba -->
          <div class="w-24 h-24 mb-4 flex items-center justify-center overflow-hidden rounded-full bg-gray-700">
            <img src="{{ asset('img/laprimera.png') }}" alt="Tuzorra" class="w-full h-full object-cover">
          </div>
          <!-- Contenido de la caja -->
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">
              Ana Hergueta Garde
            </h2>
            <p class="leading-relaxed text-base text-gray-300">
              Enóloga y sumiller cofundadora y propietaria del restaurante Palo Cortao en Sevilla.
            </p>
            <a href="mailto:pilar.perez@cesurformacion.com" class="mt-3 text-purple-400 inline-flex items-center">
              ana.hergueta@southwinesacademy.com  
            </a>
            <br>
            <a href="tel:+34649446120" class="mt-3 text-purple-400 inline-flex items-center">
              Tlf: 649 44 61 20
            </a>
          </div>
        </div>
      </div>
  
      <!-- Segunda caja -->
      <div class="p-4 w-full lg:w-1/2">
        <div class="flex flex-col items-center border-2 rounded-lg border-gray-800 p-8 bg-gray-800 bg-opacity-80 px-4 pt-8 pb-12 text-center relative transition-transform transform hover:scale-105 hover:shadow-lg">
          <!-- Imagen circular centrada arriba -->
          <div class="w-24 h-24 mb-4 flex items-center justify-center overflow-hidden rounded-full bg-gray-700">
            <img src="{{ asset('img/lasegunda.png') }}" alt="Tuzorra" class="w-full h-full object-cover">
          </div>
          <!-- Contenido de la caja -->
          <div class="flex-grow">
            <h2 class="text-white text-lg title-font font-medium mb-3">
              Pilar Pérez Vaca
            </h2>
            <p class="leading-relaxed text-base text-gray-300">
              Sumiller y docente. Mejor sumiller de Sevilla 2016, 2018 y 2019.
            </p>
            <a href="mailto:pilar.perez@cesurformacion.com" class="mt-3 text-purple-400 inline-flex items-center">
              pilar.perez@cesurformacion.com
            </a>
            <br>
            <a href="tel:+34649446120" class="mt-3 text-purple-400 inline-flex items-center">
              Tlf: 647 09 46 59
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Asegúrate de incluir los scripts de AOS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
  <script>
      const themeToggle = document.getElementById('theme-toggle');
      const body = document.body;

      themeToggle.addEventListener('click', () => {
          body.classList.toggle('dark-mode');
          body.classList.toggle('light-mode');
          if (body.classList.contains('dark-mode')) {
              themeToggle.textContent = 'Modo Claro';
          } else {
              themeToggle.textContent = 'Modo Oscuro';
          }
      });
  </script>
  

 
</body>
</html>

@endsection