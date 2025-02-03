@extends('layouts.app')
@section('title', 'South Wine Academy - Reseñas de Vinos')
@section('content')
    <style>
        /* Estilos profesionales */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;600&display=swap');
 
        :root {
            --gold: #FFD700;
            --dark: #1a1a1a;
            --gray-dark: #333333;
            --gray-medium: #666666;
            --gray-light: #999999;
            --shadow: rgba(0, 0, 0, 0.3);
        }
 
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.95), rgba(26, 26, 26, 0.95)), url('{{ asset('img/fondovinos.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            margin: 0;
            padding: 0;
        }
 
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            text-align: center;
        }
 
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
 
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            position: relative;
        }
 
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: var(--gold);
            margin: 10px auto;
        }
 
        .form-container {
            background: rgba(26, 26, 26, 0.8);
            border: 1px solid rgba(102, 102, 102, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 30px;
            margin: 0 auto;
            max-width: 600px;
            text-align: center;
        }
 
        .form-container input,
        .form-container textarea {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 12px;
            color: #fff;
            transition: all 0.3s ease;
            width: 100%;
            margin: 10px 0;
        }
 
        .form-container input:focus,
        .form-container textarea:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--gold);
            outline: none;
        }
 
        .submit-btn {
            background: var(--gray-dark);
            color: #fff;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 20px;
            border: 1px solid var(--gray-medium);
        }
 
        .submit-btn:hover {
            background: var(--gray-medium);
            border-color: var(--gray-light);
            color: #fff;
        }
 

        .review-card {
            background: rgba(26, 26, 26, 0.8);
            border: 1px solid rgba(102, 102, 102, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px var(--shadow);
            text-align: center;
        }
 

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px var(--shadow);
        }
 
        .review-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid var(--gold);
            object-fit: cover;
            margin: 0 auto 15px;
            transition: all 0.3s ease;
        }
 
        .review-image:hover {
            transform: scale(1.1);
            border-color: var(--light-wine);
        }
 
        .like-btn {
            background: var(--gold);
            color: var(--dark-wine);
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
        }
 
        .like-btn:hover {
            background: var(--light-wine);
            color: #fff;
        }
 
        .like-btn svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/resenas.js'])
 
    <!-- Sección del Formulario -->
    <section class="py-12">
        <div class="container">
            <h1 class="section-title">🍷 Comparte Tu Experiencia Vinícola 🍇</h1>
            <div class="form-container">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="resenaForm" action="{{ route('resenas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label class="block text-lg font-semibold mb-2">✨ Califica con Estrellas</label>
                        <div id="starRating" class="flex justify-center gap-2 mx-auto">
                            @for ($i = 1; $i <= 5; $i++)
                            <span class="star-hover text-4xl cursor-pointer text-gold opacity-60 hover:text-gold transition-all duration-300" data-value="{{ $i }}">★</span>
                            @endfor
                        </div>
                        <input type="hidden" id="stars" name="stars" value="0">
                    </div>
                    <div class="mb-6">
                        <label for="name" class="block text-lg font-semibold mb-2">🏷️ Tu Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Ej: Juan Pérez" required>
                    </div>
                    <div class="mb-6">
                        <label for="review" class="block text-lg font-semibold mb-2">📝 Tu Experiencia</label>
                        <textarea id="review" name="review" rows="4" placeholder="Describe tu experiencia mágica..." required></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="image" class="block text-lg font-semibold mb-2">📸 Sube tu Foto (Opcional)</label>
                        <div class="relative group mx-auto" style="max-width: 200px;">
                            <input type="file" id="image" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                            <div class="px-4 py-6 bg-gold/10 border-2 border-dashed border-gold/40 rounded-xl group-hover:bg-gold/20 transition-all duration-300 relative">
                                <p class="text-center text-gold/80 font-medium relative z-10"><span class="text-gold">⬆️</span> Imagen</p>
                                <div id="imagePreview" class="mt-4 hidden relative z-10">
                                    <img src="" alt="Vista previa" class="max-h-32 mx-auto rounded-lg shadow-md border-2 border-gold/30">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn w-full">
                        Publicar Reseña
                    </button>
                </form>
            </div>
        </div>
    </section>
 
    <!-- Sección de Reseñas -->
    <section class="py-12">
        <div class="container">
            <h2 class="section-title">🍇 Reseñas de Nuestros Connoisseurs 🍷</h2>
            <h3 class="text-center text-2xl mb-8">Hay {{ $resenas->count() }} reseñas</h3>
            <!-- Se agrega id para actualizar dinámicamente el listado -->
            <div id="reviewsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($resenas as $resena)
                    @include('partials.resena', ['resena' => $resena])
                @endforeach
            </div>
        </div>
    </section>
@endsection