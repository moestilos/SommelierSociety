@extends('layouts.app')
 
@section('title', 'Panel de Control')
 
@section('content')
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=EB+Garamond:wght@400;500;600&display=swap');
       
        .font-cinzel {
            font-family: 'Cinzel Decorative', cursive;
        }
       
        .font-garamond {
            font-family: 'EB Garamond', serif;
        }
 
        .wine-gradient {
            background: linear-gradient(135deg, rgba(88, 28, 28, 0.95) 0%, rgba(44, 19, 19, 0.95) 100%);
        }
 
        .input-glow:focus {
            box-shadow: 0 0 15px rgba(149, 40, 40, 0.3);
        }
    </style>
    <title>Panel de Control</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
 
<body class="bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 backdrop-blur-sm">
        <div class="max-w-4xl w-full space-y-8 wine-gradient rounded-xl p-10 shadow-2xl border border-amber-900/30 transition-all duration-300">
            <div class="text-center">
                <div class="mx-auto relative w-24 h-24 mb-6">
                    <div class="absolute inset-0 bg-amber-900/20 rounded-full blur-md"></div>
                    <img src="{{ asset('img/nuevoLogo.png') }}" alt="Logo" class="relative z-10 w-full h-full object-contain rounded-full border-2 border-amber-900/30">
                </div>
                <h2 class="font-cinzel text-4xl text-amber-100 mb-2">
                    South Wine Academy
                </h2>
                <p class="font-garamond text-amber-300/80 italic">
                    "Where passion meets the vine"
                </p>
            </div>
 
            <h1 class="text-1xl font-extrabold text-white sm:text-2xl text-center font-cinzel">Panel de Control</h1>
            <div class="mt-8 text-gray-300 text-left space-y-4">
                <p>Bienvenido al panel de control del administrador. Aquí puedes gestionar cursos, catas y más.</p>
                <div class="space-y-4">
                    <a href="{{ route('cursos.create') }}" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-amber-100 bg-amber-800/80 hover:bg-amber-700/90 hover:shadow-lg transition-all duration-300 group">
                        <span>Añadir Curso</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('catas.index') }}" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-amber-100 bg-amber-800/80 hover:bg-amber-700/90 hover:shadow-lg transition-all duration-300 group">
                        <span>Gestionar Catas</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('admin.personas.form') }}" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-amber-100 bg-amber-800/80 hover:bg-amber-700/90 hover:shadow-lg transition-all duration-300 group">
                        <span>Ver Personas Apuntadas</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 
@endsection