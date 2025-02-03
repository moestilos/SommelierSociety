@extends('layouts.app')

@section('title', 'Ver Personas Apuntadas')

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

        /* Add this style for select dropdowns */
        select option {
            color: black;
            background-color: white;
        }
    </style>
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
                <p class="font-garamond text-amber-300/80 italic mb-8">
                    "Where passion meets the vine"
                </p>
                <h2 class="font-cinzel text-3xl text-amber-100 mb-6">
                    Ver Personas Apuntadas
                </h2>
            </div>

            <form action="{{ route('admin.personas.list') }}" method="GET" class="space-y-6">
                <div class="space-y-4">
                    <div>
                        <label for="tipo" class="block text-amber-100 font-garamond mb-2">Tipo:</label>
                        <select id="tipo" name="tipo" class="w-full px-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 focus:border-amber-500 input-glow transition-all duration-300 font-garamond" required>
                            <option value="curso">Curso</option>
                            <option value="cata">Cata</option>
                        </select>
                    </div>

                    <div>
                        <label for="id" class="block text-amber-100 font-garamond mb-2">Seleccionar:</label>
                        <select id="id" name="id" class="w-full px-4 py-3 bg-amber-50/5 border border-amber-900/30 rounded-lg text-amber-100 focus:border-amber-500 input-glow transition-all duration-300 font-garamond" required>
                            @foreach($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                            @endforeach
                            @foreach($catas as $cata)
                                <option value="{{ $cata->id }}">{{ $cata->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-amber-100 bg-amber-800/80 hover:bg-amber-700/90 hover:shadow-lg transition-all duration-300 group">
                    <span>Ver Personas Apuntadas</span>
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </form>

            @if(isset($reservas))
                <div class="mt-8">
                    <h3 class="text-2xl font-cinzel text-amber-100 mb-6 text-center">Personas Apuntadas</h3>
                    @if($reservas->isEmpty())
                        <p class="text-amber-100/80 text-center font-garamond">No hay personas apuntadas en este {{ $tipo }}.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($reservas as $reserva)
                                <div class="bg-amber-50/5 p-6 rounded-lg border border-amber-900/30 text-amber-100">
                                    <p class="font-garamond"><strong>Nombre:</strong> {{ $reserva->name }}</p>
                                    <p class="font-garamond"><strong>Email:</strong> {{ $reserva->email }}</p>
                                    <p class="font-garamond"><strong>Edad:</strong> {{ $reserva->age }}</p>
                                    @if(auth()->user() && auth()->user()->is_admin)
                                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" class="mt-4" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-full py-2 px-4 bg-red-500/80 hover:bg-red-600/80 text-white font-garamond rounded transition-all duration-300">
                                                Eliminar
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</body>

@endsection
