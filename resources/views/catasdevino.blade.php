@extends('layouts.app')

@section('title', 'Academia de Vinos del Sur')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Catas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .fc-event-title, .fc-event-time {
            color: #000; 
        }
        .fc {
            background-color: #fff !important; 
            color: #000 !important; 
        }
        .fc-event-title, .fc-event-time {
            color: #000 !important;
        }
    </style>
<<<<<<< HEAD
    <title>Catas de Vino</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Asegúrate de compilar estilos si usas Tailwind -->
=======
>>>>>>> c94b6bbd36ec19661ad943711d6ad988028ef4c5
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 mb-10">
        <h1 class="text-3xl font-bold mb-6 text-center text-white">Calendario de Catas</h1>
        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            <div id="calendar"></div>
        </div>
    </div>

<<<<<<< HEAD
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
        Catas de

        <strong class="block font-extrabold text-rose-500"> Vino. </strong>
      </h1>

      <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed mx-auto">
        Inscríbete en nuestras catas de vino y disfruta de una experiencia única.
      </p>

      <div class="mt-8 flex flex-wrap gap-4 justify-center">
        <a
          href="{{ url('/tarifas') }}"
          class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
        >
          Get Started
        </a>

        <a
          href="#"
          class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

=======
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: '2025-02-01',
                firstDay: 1,
                locale: 'es', 
                events: [
                    // agregamos eventos a la agenda
                    {
                        title: 'Cata de Cata de Vinos',
                        start: '2025-02-05',
                        description: 'Aprende a catar vinos como un profesional.',
                        location: 'Bodega La Rioja'
                    },
                    {
                        title: 'Curso de Maridaje',
                        start: '2025-02-17',
                        description: 'Descubre cómo combinar vinos y alimentos.',
                        location: 'Restaurante El Gourmet'
                    },
                    {
                        title: 'Cata de Vinos Tintos',
                        start: '2025-02-10',
                        description: 'Descubre los mejores vinos tintos.',
                        location: 'Bodega Tempranillo'
                    },
                    {
                        title: 'Cata de Vinos Blancos',
                        start: '2025-02-12',
                        description: 'Explora una variedad de vinos blancos.',
                        location: 'Bodega Albariño'
                    },
                    {
                        title: 'Cata de Vinos Rosados',
                        start: '2025-02-20',
                        description: 'Prueba una selección de vinos rosados.',
                        location: 'Bodega Garnacha'
                    },
                    {
                        title: 'Cata de Espumosos',
                        start: '2025-02-25',
                        description: 'Disfruta de una variedad de vinos espumosos.',
                        location: 'Bodega Cava'
                    },
                    {
                        title: 'Cata de Vinos Españoles',
                        start: '2025-03-19',
                        description: 'Conoce los mejores vinos de España.',
                        location: 'Bodega Ribera del Duero'
                    },
                    {
                        title: 'Cata de Vinos Italianos',
                        start: '2025-03-10',
                        description: 'Descubre los vinos más destacados de Italia.',
                        location: 'Bodega Toscana'
                    },
                    {
                        title: 'Cata de Vinos Franceses',
                        start: '2025-03-15',
                        description: 'Aprende sobre los vinos más famosos de Francia.',
                        location: 'Bodega Burdeos'
                    },
                    {
                        title: 'Cata de Vinos Blancos',
                        start: '2025-04-05',
                        description: 'Explora una variedad de vinos blancos.',
                        location: 'Bodega Albariño'
                    },
                    {
                        title: 'Cata de Vinos Tintos',
                        start: '2025-04-12',
                        description: 'Descubre los mejores vinos tintos.',
                        location: 'Bodega Tempranillo'
                    },
                    {
                        title: 'Cata de Vinos Rosados',
                        start: '2025-04-19',
                        description: 'Prueba una selección de vinos rosados.',
                        location: 'Bodega Garnacha'
                    },
                    {
                        title: 'Cata de Espumosos',
                        start: '2025-04-26',
                        description: 'Disfruta de una variedad de vinos espumosos.',
                        location: 'Bodega Cava'
                    }
                ],
                eventClick: function(info) {
                    alert('Evento: ' + info.event.title + '\nDescripción: ' + info.event.extendedProps.description + '\nUbicación: ' + info.event.extendedProps.location);
                }
            });
            calendar.render();
        });
    </script>
>>>>>>> c94b6bbd36ec19661ad943711d6ad988028ef4c5
</body>
</html>
@endsection