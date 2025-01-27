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
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 mb-10">
        <h1 class="text-3xl font-bold mb-6 text-center text-white">Calendario de Catas</h1>
        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            <div id="calendar"></div>
        </div>
    </div>
 
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
                    {
                        id: '1',
                        title: 'Cata de Cata de Vinos',
                        start: '2025-02-05',
                        description: 'Aprende a catar vinos como un profesional.',
                        location: 'Bodega La Rioja'
                    },
                    {
                        id: '2',
                        title: 'Curso de Maridaje',
                        start: '2025-02-17',
                        description: 'Descubre cómo combinar vinos y alimentos.',
                        location: 'Restaurante El Gourmet'
                    },
                    {
                        id: '3',
                        title: 'Cata de Vinos Tintos',
                        start: '2025-02-10',
                        description: 'Descubre los mejores vinos tintos.',
                        location: 'Bodega Tempranillo'
                    },
                    {
                        id: '4',
                        title: 'Cata de Vinos Blancos',
                        start: '2025-02-12',
                        description: 'Explora una variedad de vinos blancos.',
                        location: 'Bodega Albariño'
                    },
                    {
                        id: '5',
                        title: 'Cata de Vinos Rosados',
                        start: '2025-02-20',
                        description: 'Prueba una selección de vinos rosados.',
                        location: 'Bodega Garnacha'
                    },
                    {
                        id: '6',
                        title: 'Cata de Espumosos',
                        start: '2025-02-25',
                        description: 'Disfruta de una variedad de vinos espumosos.',
                        location: 'Bodega Cava'
                    },
                    {
                        id: '7',
                        title: 'Cata de Vinos Españoles',
                        start: '2025-03-19',
                        description: 'Conoce los mejores vinos de España.',
                        location: 'Bodega Ribera del Duero'
                    },
                    {
                        id: '8',
                        title: 'Cata de Vinos Italianos',
                        start: '2025-03-10',
                        description: 'Descubre los vinos más destacados de Italia.',
                        location: 'Bodega Toscana'
                    },
                    {
                        id: '9',
                        title: 'Cata de Vinos Franceses',
                        start: '2025-03-15',
                        description: 'Aprende sobre los vinos más famosos de Francia.',
                        location: 'Bodega Burdeos'
                    },
                    {
                        id: '10',
                        title: 'Cata de Vinos Blancos',
                        start: '2025-04-05',
                        description: 'Explora una variedad de vinos blancos.',
                        location: 'Bodega Albariño'
                    },
                    {
                        id: '11',
                        title: 'Cata de Vinos Tintos',
                        start: '2025-04-12',
                        description: 'Descubre los mejores vinos tintos.',
                        location: 'Bodega Tempranillo'
                    },
                    {
                        id: '12',
                        title: 'Cata de Vinos Rosados',
                        start: '2025-04-19',
                        description: 'Prueba una selección de vinos rosados.',
                        location: 'Bodega Garnacha'
                    },
                    {
                        id: '13',
                        title: 'Cata de Espumosos',
                        start: '2025-04-26',
                        description: 'Disfruta de una variedad de vinos espumosos.',
                        location: 'Bodega Cava'
                    }
                ],
                eventClick: function(info) {
                    window.location.href = '/cata/' + info.event.id;
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>
@endsection