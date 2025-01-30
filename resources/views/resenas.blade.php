@extends('layouts.app')

@section('title', 'Reseñas - South Wine Academy')

@section('content')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .review-card {
        animation: fadeIn 0.6s ease-out forwards;
        opacity: 0;
    }
</style>

<main class="min-h-screen bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('img/fondovinos.jpg') }}')">
    <!-- Sección de Reseñas Existente -->
    <section class="bg-white/95 py-16 backdrop-blur-sm">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-4xl font-bold text-gray-900 sm:text-5xl mb-12 animate-slide-in-down">
                Lo que dicen nuestros clientes
            </h1>

            @if(session('success'))
                <div class="mb-8 p-4 bg-emerald-50 text-emerald-700 rounded-lg border border-emerald-200 shadow-sm transition-opacity duration-300">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($resenas as $index => $resena)
                    <article class="review-card bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6" style="animation-delay: {{ $index * 0.1 }}s">
                        <div class="flex items-center gap-4 mb-4">
                            <img 
                                src="{{ $resena->image ? asset('storage/' . $resena->image) : asset('img/default-avatar.jpg') }}" 
                                alt="Avatar de {{ $resena->name }}"
                                class="w-14 h-14 rounded-full object-cover shadow-md"
                                loading="lazy"
                                decoding="async"
                            >
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-gray-900 truncate">{{ $resena->name }}</h3>
                                <div class="flex items-center gap-1 text-amber-400">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 {{ $i < $resena->stars ? 'fill-current' : 'fill-gray-300' }}" 
                                             viewBox="0 0 20 20"
                                             aria-hidden="true">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endfor
                                    <span class="sr-only">Calificación: {{ $resena->stars }} de 5 estrellas</span>
                                </div>
                            </div>
                        </div>
                        <blockquote class="text-gray-600 italic relative pl-4 before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-amber-400">
                            "{{ $resena->review }}"
                        </blockquote>
                        
                        @admin
                        <div class="mt-4 flex gap-3 justify-end border-t pt-4">
                            <a href="{{ route('resenas.edit', $resena->id) }}" 
                               class="text-sm text-blue-600 hover:text-blue-800 transition-colors flex items-center gap-1"
                               aria-label="Editar reseña">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                </svg>
                                Editar
                            </a>
                            <form action="{{ route('resenas.destroy', $resena->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-sm text-red-600 hover:text-red-800 transition-colors flex items-center gap-1"
                                        aria-label="Eliminar reseña">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        @endadmin
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Formulario de Reseñas -->
    <section class="py-16 bg-white/95 backdrop-blur-sm">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Comparte tu experiencia</h2>
                <p class="mt-2 text-gray-600">Tu opinión ayuda a otros amantes del vino</p>
            </div>
            
            <form id="resenaForm" 
                  action="{{ route('resenas.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data"
                  class="space-y-6">
                @csrf
                
                <!-- Calificación con Estrellas -->
                <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Calificación</label>
                    <div class="flex justify-center gap-2" role="radiogroup" aria-labelledby="rating-label">
                        @for ($i = 5; $i >= 1; $i--)
                            <div class="relative">
                                <input type="radio" 
                                       id="star{{ $i }}" 
                                       name="stars" 
                                       value="{{ $i }}" 
                                       class="sr-only"
                                       {{ old('stars') == $i ? 'checked' : '' }}
                                       required>
                                <label for="star{{ $i }}" 
                                       class="cursor-pointer text-3xl text-gray-300 hover:text-amber-400 transition-colors peer-checked:text-amber-400">
                                    ★
                                </label>
                            </div>
                        @endfor
                    </div>
                    @error('stars')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo Nombre -->
                <div class="relative">
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg peer focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                           placeholder=" "
                           required>
                    <label for="name" 
                           class="absolute left-4 top-3 px-1 bg-white text-gray-500 transition-all duration-200 
                                  peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                                  peer-focus:-top-2 peer-focus:text-sm peer-focus:text-amber-600">
                        Tu nombre
                    </label>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo Reseña -->
                <div class="relative">
                    <textarea id="review" 
                              name="review" 
                              rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg peer focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                              placeholder=" "
                              required>{{ old('review') }}</textarea>
                    <label for="review" 
                           class="absolute left-4 top-3 px-1 bg-white text-gray-500 transition-all duration-200 
                                  peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 
                                  peer-focus:-top-2 peer-focus:text-sm peer-focus:text-amber-600">
                        Tu reseña
                    </label>
                    @error('review')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Subida de Imagen -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">
                        Imagen (opcional)
                        <span class="text-xs text-gray-500">Formatos: JPEG, PNG, WEBP (Max 2MB)</span>
                    </label>
                    <div x-data="{ preview: null }" class="space-y-4">
                        <input type="file" 
                               id="image" 
                               name="image" 
                               accept="image/jpeg, image/png, image/webp"
                               class="w-full file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200 transition-colors"
                               x-on:change="preview = URL.createObjectObject($event.target.files[0])">
                        
                        <!-- Vista Previa de la Imagen -->
                        <template x-if="preview">
                            <div class="mt-2 relative">
                                <img :src="preview" 
                                     alt="Vista previa de la imagen" 
                                     class="w-32 h-32 rounded-full object-cover border-2 border-amber-100 shadow-sm">
                                <button type="button" 
                                        @click="preview = null; document.getElementById('image').value = ''"
                                        class="absolute -top-2 -right-2 bg-white rounded-full p-1 shadow-sm hover:bg-red-50 transition-colors"
                                        aria-label="Eliminar imagen">
                                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </template>
                    </div>
                    @error('image')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botón de Envío -->
                <button type="submit" 
                        class="w-full py-3 px-6 bg-amber-500 hover:bg-amber-600 text-white font-medium rounded-lg transition-colors 
                               flex items-center justify-center gap-2 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2"
                        id="submitBtn">
                    <svg id="submitIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                    </svg>
                    <span id="submitText">Publicar Reseña</span>
                    <div id="spinner" class="hidden animate-spin ml-2">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </button>
            </form>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validación de Estrellas
    const stars = document.querySelectorAll('input[name="stars"]');
    stars.forEach(star => {
        star.addEventListener('change', () => {
            document.querySelectorAll('label[for^="star"]').forEach(label => {
                const starValue = label.getAttribute('for').replace('star', '');
                label.style.color = starValue <= star.value ? '#f59e0b' : '#e5e7eb';
            });
        });
    });

    // Form Submission Handler
    const form = document.getElementById('resenaForm');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const spinner = document.getElementById('spinner');
        const submitIcon = document.getElementById('submitIcon');
        
        submitBtn.disabled = true;
        submitText.textContent = 'Enviando...';
        submitIcon.classList.add('hidden');
        spinner.classList.remove('hidden');

        try {
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                const errors = await response.json();
                throw errors;
            }

            window.location.reload();
        } catch (error) {
            console.error('Error:', error);
            if (error.errors) {
                Object.entries(error.errors).forEach(([field, messages]) => {
                    const errorElement = document.createElement('p');
                    errorElement.className = 'mt-2 text-sm text-red-600';
                    errorElement.textContent = messages[0];
                    document.querySelector(`[name="${field}"]`).closest('.relative').appendChild(errorElement);
                });
            }
        } finally {
            submitBtn.disabled = false;
            submitText.textContent = 'Publicar Reseña';
            submitIcon.classList.remove('hidden');
            spinner.classList.add('hidden');
        }
    });
});
</script>
@endsection