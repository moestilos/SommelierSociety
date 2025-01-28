@extends('layouts.app')

@section('title', 'Información de Cursos de Sommeliers')

@section('content')
<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

<div class="relative flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/vino.jpg') }}');">
    <div class="absolute inset-0 bg-gray-900 bg-opacity-25"></div>
    <div class="relative z-10 max-w-4xl p-8 bg-black bg-opacity-90 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-center text-yellow-600 mb-8">Información de Cursos de Sommeliers</h1>
        <p class="text-lg text-gray-200 mb-4">
            Nuestros cursos de Sommeliers están diseñados para proporcionar una comprensión profunda de los vinos, desde su producción hasta su degustación. Aprenderás sobre las diferentes variedades de uvas, técnicas de vinificación, y cómo maridar vinos con alimentos.
        </p>
        <p class="text-lg text-gray-200 mb-4">
            Los cursos son impartidos por expertos en la industria del vino y están dirigidos tanto a principiantes como a profesionales que desean ampliar sus conocimientos. Ofrecemos una variedad de cursos que se adaptan a tus necesidades y horarios.
        </p>
        <h2 class="text-2xl font-semibold text-yellow-600 mb-4">Detalles del Curso</h2>
        <ul class="list-disc list-inside text-lg text-gray-200 mb-4">
            <li>Duración: 6 semanas</li>
            <li>Modalidad: Presencial y en línea</li>
            <li>Horario: Lunes a Viernes, 6:00 PM - 9:00 PM</li>
            <li>Precio: $500 USD</li>
        </ul>
        <h2 class="text-2xl font-semibold text-yellow-600 mb-4">Inscripción</h2>
        <p class="text-lg text-gray-200 mb-4">
            Para inscribirte en nuestros cursos, visita nuestra página de <a href="{{ url('/tarifas') }}" class="text-yellow-600 hover:underline">Tarifas</a> o contáctanos a través de nuestro <a href="{{ url('/contacto') }}" class="text-yellow-600 hover:underline">Formulario de Contacto</a>.
        </p>
    </div>
</div>


</body>
@endsection