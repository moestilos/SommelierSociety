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

<!-- Sección de Reseñas Existente -->
<section class="py-12 backdrop-blur-md">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-4xl font-bold tracking-tight text-gold-100 sm:text-5xl font-jaro drop-shadow-lg mb-8">
            🍇 Reseñas de Nuestros Connoisseurs 🍷
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
                    
                    @if(auth()->user() && auth()->user()->is_admin)
                    <div class="absolute bottom-4 right-4 space-x-3 flex">
                        <!-- Botones de administrador sin cambios -->
                        <a href="{{ route('resenas.edit', $resena->id) }}" class="text-wine-800 hover:text-gold-400 transition-colors p-1.5 bg-white/80 rounded-lg shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                        </a>
                        <form action="{{ route('resenas.destroy', $resena->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-wine-800 hover:text-red-600 transition-colors p-1.5 bg-white/80 rounded-lg shadow-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            </button>
                        </form>
                    </div>
                    @endif
                </blockquote>
            </div>
            @endforeach
        </div>
    </div>
</section>


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

<script>
    // Star Rating Animation
    document.querySelectorAll('#starRating .star-hover').forEach(star => {
        star.addEventListener('mouseover', function() {
            const value = this.getAttribute('data-value');
            document.querySelectorAll('#starRating .star-hover').forEach((s, index) => {
                s.style.color = index < value ? '#d4af37' : '#5a0f1d30';
                s.style.transform = index < value ? 'scale(1.2)' : 'scale(1)';
            });
        });

        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('stars').value = value;
            document.querySelectorAll('#starRating .star-hover').forEach((s, index) => {
                s.style.color = index < value ? '#d4af37' : '#5a0f1d30';
                s.classList.toggle('animate-pulse', index < value);
            });
        });
    });

    // Image Preview
    document.getElementById('image').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById('imagePreview');
            preview.querySelector('img').src = reader.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    // Form Submission
    document.getElementById('resenaForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const button = this.querySelector('button[type="submit"]');
        button.innerHTML = '<div class="custom-loader"></div> Enviando...';
        button.disabled = true;
        
        setTimeout(() => {
            button.innerHTML = '✓ Reseña Enviada!';
            button.classList.add('bg-green-500');
            setTimeout(() => this.submit(), 1500);
        }, 2000);
    });

    // Arrastrar y soltar archivos
    const dropArea = document.querySelector('.group');
    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('bg-gold-100/20');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('bg-gold-100/20');
    });

    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('bg-gold-100/20');
        const file = e.dataTransfer.files[0];
        document.getElementById('image').files = e.dataTransfer.files;
        const reader = new FileReader();
        reader.onload = function (e) {
            const preview = document.getElementById('imagePreview');
            preview.querySelector('img').src = e.target.result;
            preview.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    });
</script>

<style>
    .text-gold-100 { color: #f8f9fa; }
    .text-gold-200 { color: #f5d076; }
    .text-gold-300 { color: #d4af37; }
    .text-gold-400 { color: #b88f2e; }
    .text-wine-800 { color: #5a0f1d; }
    .text-wine-700 { color: #6b1d2d; }
    
    .border-gold-200/30 { border-color: rgba(245, 208, 118, 0.3); }
    .border-gold-300/30 { border-color: rgba(212, 175, 55, 0.3); }
    
    .drop-shadow-star {
        filter: drop-shadow(0 2px 4px rgba(212, 175, 55, 0.3));
    }
    
    .animate-ping-slow {
        animation: ping 3s cubic-bezier(0, 0, 0.2, 1) infinite;
    }
    
    @keyframes ping {
        75%, 100% { transform: scale(1.8); opacity: 0; }
    }
    
    .animate-spin-slow {
        animation: spin 6s linear infinite;
    }
    
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .custom-loader {
        width: 20px;
        height: 20px;
        border: 3px solid #f8f9fa;
        border-bottom-color: transparent;
        border-radius: 50%;
        animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

</body>
</html>
@endsection