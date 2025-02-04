@extends('layouts.app')

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
        <div class="max-w-md w-full space-y-8 wine-gradient rounded-xl p-10 shadow-2xl border border-amber-900/30 transition-all duration-300">
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

            <form id="adminForm" action="{{ route('admin.form.submit') }}" method="POST" onsubmit="return confirmSubmit()" class="mt-8 space-y-6">
                @csrf
                <div class="space-y-5">
                    <div class="relative group">
                        <input type="text" id="name" name="name" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Nombre del curso/cata">
                    </div>

                    <div class="relative group">
                        <select id="type" name="type" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 focus:border-amber-500 input-glow transition-all duration-300 font-garamond">
                            <option value="cata">Cata</option>
                            <option value="curso">Curso</option>
                        </select>
                    </div>

                    <div class="relative group">
                        <input type="date" id="date" name="date" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 focus:border-amber-500 input-glow transition-all duration-300 font-garamond">
                    </div>

                    <div class="relative group">
                        <input type="time" id="time" name="time" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 focus:border-amber-500 input-glow transition-all duration-300 font-garamond">
                    </div>

                    <div class="relative group">
                        <input type="text" id="location" name="location" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Localización">
                    </div>

                    <div class="relative group">
                        <textarea id="description" name="description" required
                            class="w-full pl-12 pr-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 placeholder-amber-300/50 focus:border-amber-500 input-glow transition-all duration-300 font-garamond"
                            placeholder="Descripción"></textarea>
                    </div>
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-amber-100 bg-amber-800/80 hover:bg-amber-700/90 hover:shadow-lg transition-all duration-300 group">
                        <span>Enviar</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>

                    <a href="{{ route('catas.index') }}" class="w-full flex justify-center items-center py-3 px-4 border border-amber-900/30 rounded-lg font-cinzel text-amber-100 hover:bg-amber-900/20 transition-all duration-300 group">
                        <span>Volver al Calendario</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function confirmSubmit() {
            return confirm('¿Estás seguro de que deseas enviar este formulario?');
        }
    </script>
</body>
@endsection