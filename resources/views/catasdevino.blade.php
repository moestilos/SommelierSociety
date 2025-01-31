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
        .tooltip {
            position: absolute;
            z-index: 10001;
            background: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body style="background-image: url('{{ asset('img/catainfofondo.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container mx-auto mt-10 mb-10">
        @if(Auth::check() && Auth::user()->is_admin)
        <div class="text-center mb-6">
            <a href="{{ route('admin.form') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Añadir Catas
            </a>
        </div>
        @endif
        <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
            
        <h1 class="text-3xl font-bold mb-6 text-center text-black">Calendario de Catas</h1>
            <div id="calendar"></div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>
    <script src="{{ asset('resources/js/catas.js') }}"></script> 
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: '2025-02-01',
                firstDay: 1,
                locale: 'es',
                events: [
                    @foreach($catas as $cata)
                    {
                        id: '{{ $cata->id }}',
                        title: '{{ $cata->title }}',
                        start: '{{ $cata->date }}',
                        description: '{{ $cata->description }}',
                        location: '{{ $cata->location }}'
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    window.location.href = '/cata/' + info.event.id;
                },
                eventMouseEnter: function(info) {
                    var tooltip = document.createElement('div');
                    tooltip.className = 'tooltip';
                    tooltip.innerHTML = info.event.title;
                    document.body.appendChild(tooltip);

                    tooltip.style.left = info.jsEvent.pageX + 'px';
                    tooltip.style.top = info.jsEvent.pageY + 'px';

                    info.el.addEventListener('mouseleave', function() {
                        tooltip.remove();
                    });
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>
@endsection