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
        /* Animaciones y efectos principales */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
       
        .review-card {
            animation: fadeIn 0.6s ease-out;
            box-shadow: 0 10px 30px rgba(90, 15, 29, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(248, 249, 250, 0.9);
            backdrop-filter: blur(8px);
        }
 
        /* Nuevo estilo para imágenes cuadradas */
        .review-image {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            border: 3px solid #d4af37;
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
            object-fit: cover;
        }
 
        .review-image:hover {
            transform: rotate(3deg) scale(1.1);
            box-shadow: 0 6px 15px rgba(212, 175, 55, 0.5);
        }
 
        /* Ajustes estéticos mantenidos */
        .star-hover {
            transition: all 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(212, 175, 55, 0.3));
        }
 
        .gold-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f5d076 50%, #d4af37 100%);
            background-size: 200% auto;
            transition: all 0.4s ease;
        }
 
        .wine-glass-effect {
            background: rgba(248, 249, 250, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/resenas.js'])
</head>
<body class="flex flex-col min-h-screen" style="background-image: linear-gradient(rgba(90, 15, 29, 0.85), rgba(90, 15, 29, 0.85)), url('{{ asset('img/fondovinos.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
 
<!-- Sección del Formulario primero -->
<section class="py-12 backdrop-blur-md">
    <div class="container px-6 mx-auto max-w-2xl">
        <h1 class="text-4xl font-bold text-center text-gold-100 mb-8 font-jaro drop-shadow-lg">
            🍷 Comparte Tu Experiencia Vinícola 🍇
        </h1>
        <form id="resenaForm" action="{{ route('resenas.store') }}" method="POST" enctype="multipart/form-data"
            class="wine-glass-effect p-8 rounded-2xl shadow-2xl border border-gold-200/20 relative overflow-hidden">
            <div class="absolute inset-0 bg-gold-100/5 z-0"></div>
            @csrf
            <div class="mb-6 relative z-10">
                <label class="block text-lg font-semibold text-black mb-4">
                    ✨ Califica con Estrellas
                </label>
                <div id="starRating" class="flex justify-center gap-2">
                    @for ($i = 1; $i <= 5; $i++)
                    <span class="star-hover text-5xl cursor-pointer text-gold-100/40 hover:text-gold-300 transition-all duration-300" data-value="{{ $i }}">★</span>
                    @endfor
                </div>
                <input type="hidden" id="stars" name="stars" value="0">
            </div>
            <div class="mb-6 relative z-10">
                <label for="name" class="block text-lg font-semibold text-black mb-3">
                    🏷️ Tu Nombre
                </label>
                <input type="text" id="name" name="name"
                    class="w-full px-4 py-3 rounded-xl border-2 border-gold-200/30 focus:border-gold-400 focus:ring-2 focus:ring-gold-200/30 bg-white/90 text-wine-800 placeholder-wine-600/50 transition-all input-glow"
                    placeholder="Ej: Juan Pérez">
            </div>
            <div class="mb-6 relative z-10">
                <label for="review" class="block text-lg font-semibold text-black mb-3">
                    📝 Tu Experiencia
                </label>
                <textarea id="review" name="review" rows="4"
                    class="w-full px-4 py-3 rounded-xl border-2 border-gold-200/30 focus:border-gold-400 focus:ring-2 focus:ring-gold-200/30 bg-white/90 text-wine-800 placeholder-wine-600/50 transition-all input-glow"
                    placeholder="Describe tu experiencia mágica..."></textarea>
            </div>
            <div class="mb-8 relative z-10">
                <label for="image" class="block text-lg font-semibold text-black mb-3">
                    📸 Sube tu Foto (Opcional)
                </label>
                <div class="relative group">
                    <input type="file" id="image" name="image"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                        accept="image/*">
                    <div class="px-4 py-6 bg-gold-100/10 border-2 border-dashed border-gold-200/40 rounded-xl group-hover:bg-gold-100/20 transition-all duration-300 relative">
                        <div class="absolute inset-0 bg-gold-100/5 group-hover:bg-gold-100/10 transition-all"></div>
                        <p class="text-center text-gold-200/80 font-medium relative z-10">
                            <span class="text-gold-300">⬆️</span>Imagen
                        </p>
                        <div id="imagePreview" class="mt-4 hidden relative z-10">
                            <img src="" alt="Vista previa" class="max-h-32 mx-auto rounded-lg shadow-md border-2 border-gold-200/30">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit"
                    class="w-full gold-gradient py-4 px-6 text-xl font-bold text-wine-900 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[1.02] flex items-center justify-center gap-2 border-2 border-gold-300/30 relative z-10">
                <svg class="w-6 h-6 animate-spin-slow" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                </svg>
                Publicar Reseña
            </button>
        </form>
    </div>
</section>

<!-- Sección de Reseñas movida abajo -->
<section class="py-12 backdrop-blur-md">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-4xl font-bold tracking-tight text-gold-100 sm:text-5xl font-jaro drop-shadow-lg mb-8">
            🍇 Reseñas de Nuestros Connoisseurs 🍷
        </h2>
        <h2 class="text-center text-4xl font-bold">
            Hay {{ $resenas->count() }} reseñas
        </h2>
       
        @if(session('success'))
            <div class="alert alert-success mt-4 p-4 rounded-xl gold-gradient text-[#5a0f1d] font-bold border-2 border-gold-200">
                {{ session('success') }}
            </div>
        @endif
 
        <div id="resenasContainer" class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($resenas as $resena)
            <div class="review-card group">
                <blockquote class="h-full px-6 pt-8 pb-12 rounded-2xl overflow-hidden text-center relative">
                    <div class="flex items-center gap-4 mb-4 relative">
                        <!-- Imagen cuadrada modificada -->
                        <img
                            alt=""
                            src="{{ $resena->image ? asset('storage/' . $resena->image) : asset('img/default-avatar.jpg') }}"
                            class="review-image"
                        />
                        <div>
                            <div class="flex justify-center gap-1">
                                @for ($i = 0; $i < $resena->stars; $i++)
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-7 fill-current text-gold-400"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                @endfor
                            </div>
                            <p class="mt-3 text-xl font-bold text-wine-800 font-teko tracking-wide">
                                {{ $resena->name }}
                            </p>
                        </div>
                    </div>
                    <p class="mt-4 text-wine-700/90 italic font-dancing-script text-lg leading-relaxed px-4">
                        "{{ $resena->review }}"
                    </p>
                    <button class="like-btn text-sm font-bold text-wine-900 mt-2" data-id="{{ $resena->id }}">
                        Me Gusta (<span class="like-count">{{ $resena->likes }}</span>)
                    </button>
                </blockquote>
            </div>
            @endforeach
        </div>
    </div>
</section>
</body>
</html>
@endsection