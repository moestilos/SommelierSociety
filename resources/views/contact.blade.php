@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<body class="bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900">

<div class="container mx-auto px-4 py-12 bg-gradient-to-br from-black via-red-900 to-black dark:bg-gray-900 md:max-w-3xl md:mx-auto rounded-xl">
    <div class="text-center mb-12">
        
    </div>

    <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-white/20">
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-500/20 text-green-100 rounded-xl border border-green-400/50">
            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
            @csrf

            <!-- Campo Nombre -->
            <div class="mb-4">
                <label for="name" class="block text-white text-sm mb-1">
                    <i class="fas fa-user mr-2"></i>Nombre completo
                </label>
                <input type="text" name="name" id="name" required minlength="3" maxlength="60"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all"
                    placeholder="">
            </div>

            <!-- Campo Correo -->
            <div class="mb-4">
                <label for="email" class="block text-white text-sm mb-1">
                    <i class="fas fa-envelope mr-2"></i>Correo electrónico
                </label>
                <input type="email" name="email" id="email" required maxlength="254"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all"
                    placeholder="">
            </div>

            <!-- Campo Teléfono -->
            <div class="mb-4">
                <label for="phone" class="block text-white text-sm mb-1">
                    <i class="fas fa-phone mr-2"></i>Teléfono (9 dígitos)
                </label>
                <div class="flex relative">
                    <!-- Selector de País: España está primero -->
                    <select id="countryCode" class="rounded-l-lg border border-white/20 bg-transparent text-white px-3 py-3 appearance-none focus:outline-none focus:border-purple-400 pr-8">
                        <option value="+34" selected>España (+34)</option>
                        <option value="+93">Afganistán (+93)</option>
                        <option value="+355">Albania (+355)</option>
                        <option value="+213">Argelia (+213)</option>
                        <option value="+376">Andorra (+376)</option>
                        <option value="+244">Angola (+244)</option>
                        <option value="+1">Antigua y Barbuda (+1)</option>
                        <option value="+54">Argentina (+54)</option>
                        <option value="+374">Armenia (+374)</option>
                        <option value="+61">Australia (+61)</option>
                        <option value="+43">Austria (+43)</option>
                        <option value="+994">Azerbaiyán (+994)</option>
                        <option value="+1">Bahamas (+1)</option>
                        <option value="+973">Baréin (+973)</option>
                        <option value="+880">Bangladesh (+880)</option>
                        <option value="+1">Barbados (+1)</option>
                        <option value="+375">Bielorrusia (+375)</option>
                        <option value="+32">Bélgica (+32)</option>
                        <option value="+501">Belice (+501)</option>
                        <option value="+229">Benín (+229)</option>
                        <option value="+1">Bermudas (+1)</option>
                        <option value="+975">Bután (+975)</option>
                        <option value="+591">Bolivia (+591)</option>
                        <option value="+387">Bosnia y Herzegovina (+387)</option>
                        <option value="+267">Botswana (+267)</option>
                        <option value="+55">Brasil (+55)</option>
                        <option value="+673">Brunéi (+673)</option>
                        <option value="+1">Canadá (+1)</option>
                        <option value="+86">China (+86)</option>
                        <option value="+61">Nueva Zelanda (+61)</option>
                        <option value="+33">Francia (+33)</option>
                        <option value="+49">Alemania (+49)</option>
                        <option value="+39">Italia (+39)</option>
                        <option value="+81">Japón (+81)</option>
                        <option value="+82">Corea del Sur (+82)</option>
                        <option value="+44">Reino Unido (+44)</option>
                        <option value="+971">Emiratos Árabes Unidos (+971)</option>
                        <option value="+7">Rusia (+7)</option>
                        <option value="+91">India (+91)</option>
                        <option value="+27">Sudáfrica (+27)</option>
                    </select>
                    <input type="tel" name="phone" id="phone" required pattern="^\+34\s\d{9}$" minlength="13" maxlength="13"
                        class="w-full px-4 py-3 bg-white/5 border-t border-b border-r border-white/20 rounded-r-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all"
                        placeholder="">
                </div>
                <!-- Banner que informa sobre el prefijo -->
                <small id="phoneBanner" class="block text-yellow-300 text-xs mt-1 hidden">
                    Se añadirá el prefijo seleccionado automáticamente.
                </small>
            </div>

            <!-- Campo Mensaje -->
            <div class="mb-4">
                <label for="message" class="block text-white text-sm mb-1">
                    <i class="fas fa-comment-dots mr-2"></i>Mensaje
                </label>
                <textarea name="message" id="message" rows="4" required minlength="10" maxlength="500"
                    class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-300/30 focus:ring-offset-2 focus:ring-offset-black text-white transition-all resize-none"
                    placeholder=""></textarea>
            </div>

            <button type="submit" 
                class="w-full py-3 px-6 bg-gradient-to-r from-yellow-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.03]">
                <i class="fas fa-paper-plane mr-2"></i>Enviar Mensaje
            </button>
        </form>
        <!-- Actualización del script inline para aplicar el prefijo según el selector de país -->
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                const phoneInput = document.querySelector('input[name="phone"]');
                const phoneBanner = document.getElementById('phoneBanner');
                const countrySelect = document.getElementById('countryCode');
                if(phoneInput && countrySelect){
                    phoneInput.addEventListener('focus', function(){
                        phoneBanner.classList.remove('hidden');
                    });
                    phoneInput.addEventListener('blur', function(){
                        const val = phoneInput.value.trim();
                        const selectedCode = countrySelect.value;
                        if(val && !val.startsWith(selectedCode)){
                            phoneInput.value = selectedCode + ' ' + val;
                        }
                        phoneBanner.classList.add('hidden');
                    });
                }
            });
        </script>
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .font-dancing {
        font-family: 'Dancing Script', cursive;
    }
    /* Actualización de autofill para conservar el formato */
    input:-webkit-autofill,
    textarea:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px rgba(17, 24, 39, 0.5) inset !important;
        -webkit-text-fill-color: white !important;
        transition: background-color 5000s ease-in-out 0s !important;
    }
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus {
        -webkit-text-fill-color: white;
        -webkit-box-shadow: 0 0 0px 1000px rgba(255, 255, 255, 0.05) inset;
    }
    /* Nuevo estilo para que los íconos se desvanezcan */
    .group:focus-within .icon-fade {
        opacity: 0;
        transition: opacity 0.5s ease-out;
    }
    /* Regla para que las opciones del selector se muestren en negro */
    select#countryCode option {
        color: black !important;
    }
</style>

@endsection