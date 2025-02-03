@extends('layouts.app')

@section('title', 'Añadir Curso')

@section('content')
<head>
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
</head>

<body class="bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 backdrop-blur-sm">
        <div class="max-w-2xl w-full space-y-8 wine-gradient rounded-xl p-10 shadow-2xl border border-amber-900/30 transition-all duration-300">
            <div class="text-center">
                <div class="mx-auto relative w-24 h-24 mb-6">
                    <div class="absolute inset-0 bg-amber-900/20 rounded-full blur-md"></div>
                    <img src="{{ asset('img/nuevoLogo.png') }}" alt="Logo" class="relative z-10 w-full h-full object-contain rounded-full border-2 border-amber-900/30">
                </div>
                <h2 class="font-cinzel text-4xl text-amber-100 mb-2">
                    South Wine Academy
                </h2>
                <p class="font-garamond text-amber-300/80 italic mb-6">
                    "Where passion meets the vine"
                </p>
                <h2 class="font-cinzel text-3xl text-amber-100">
                    Añadir Curso
                </h2>
            </div>

            <form action="{{ route('cursos.store') }}" method="POST" class="mt-8 space-y-6">
                @csrf
                
                <div class="space-y-4">
                    <div class="relative group">
                        <input type="text" id="nombre" name="nombre" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Nombre del curso">
                    </div>

                    <div class="relative group">
                        <textarea id="descripcion_breve" name="descripcion_breve" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Descripción breve"></textarea>
                    </div>

                    <div class="relative group">
                        <textarea id="descripcion" name="descripcion" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Descripción completa"></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative group">
                            <input type="text" id="modalidad" name="modalidad" required
                                class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                                placeholder="Modalidad">
                        </div>

                        <div class="relative group">
                            <input type="number" id="duracion" name="duracion" required
                                class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                                placeholder="Duración (horas)">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative group">
                            <input type="text" id="lugar" name="lugar" required
                                class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                                placeholder="Lugar">
                        </div>

                        <div class="relative group">
                            <input type="number" id="coste" name="coste" required
                                class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                                placeholder="Coste (€)">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative group">
                            <input type="text" id="idioma" name="idioma" required
                                class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                                placeholder="Idioma">
                        </div>

                        <div class="relative group">
                            <input type="number" id="plazas_disponibles" name="plazas_disponibles" required
                                class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                                placeholder="Plazas disponibles">
                        </div>
                    </div>

                    <div class="relative group">
                        <textarea id="contenidos" name="contenidos" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Contenidos del curso"></textarea>
                    </div>
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-amber-100 bg-amber-800/80 hover:bg-amber-700/90 hover:shadow-lg transition-all duration-300 group">
                        <span>Añadir Curso</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>

                    <a href="{{ route('tarifas.index') }}" class="w-full flex justify-center items-center py-3 px-4 border border-amber-900/30 rounded-lg font-cinzel text-amber-100 hover:bg-amber-900/20 transition-all duration-300 group">
                        <span>Volver</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
