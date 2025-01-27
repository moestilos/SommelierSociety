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

  
<section
  class="relative bg-[url('{{ asset('img/fondocursos.jpg') }}')] bg-cover bg-center bg-no-repeat"
>
  <div
    class="absolute inset-0 bg-gray-900/75 sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
  ></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-10 lg:flex lg:h-screen lg:items-center lg:px-16"
  >
    <div class="max-w-xl text-center mx-auto">
      <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
        Cursos de

        <strong class="block font-extrabold text-rose-500"> Sommelier. </strong>
      </h1>

      <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed mx-auto">
        Inscribete en nuestros cursos de Sommelier de Vinos de Jerez
      </p>

      <div class="mt-8 flex flex-wrap gap-4 justify-center">
        <a
          href="{{ url('/tarifas') }}"
          class="block w-full rounded bg-rose-600 px-16 py-4 text-lg font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
        >
          Tarifas
        </a>

        <a
          href="{{ url('/info') }}"
          class="block w-full rounded bg-white px-16 py-4 text-lg font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
        >
          Información
        </a>
      </div>
    </div>
  </div>
</section>

</body>
</html>
@endsection