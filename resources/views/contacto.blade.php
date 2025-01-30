@extends('layouts.app')

@section('title', 'South Wine Academy')

@section('content')

<body class="flex flex-col min-h-screen"
    style="background-image: url('{{ asset('img/fondocursos.jpg') }}'); background-size: cover; background-position: center;">

<div class="container mx-auto px-4 py-24">
    

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
        <!-- Ana Hergueta Card -->
        <div class="group relative" data-aos="fade-right">
            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 shadow-2xl transform transition-all duration-300 hover:border-yellow-400/50 hover:shadow-yellow-500/20">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-pink-500/10 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="flex flex-col items-center relative z-10">
                    <div class="w-32 h-32 mb-6 rounded-full border-2 border-yellow-400/30 p-1 transition-all duration-300 group-hover:border-yellow-400/60">
                        <img src="{{ asset('img/laprimera.png') }}" alt="Ana Hergueta" 
                             class="w-full h-full object-cover rounded-full transform group-hover:scale-105 transition-transform">
                    </div>
                    
                    <h2 class="text-2xl font-semibold bg-gradient-to-r from-yellow-400 to-pink-300 bg-clip-text text-transparent mb-2">
                        Ana Hergueta Garde
                    </h2>
                    <p class="text-lg text-yellow-100 mb-4">Enóloga y sumiller</p>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-200 leading-relaxed">
                            Cofundadora y propietaria del restaurante Palo Cortao en Sevilla
                        </p>
                    </div>
                    
                    <div class="space-y-2">
                        <a href="mailto:ana.hergueta@southwinesacademy.com" 
                           class="inline-flex items-center text-yellow-300 hover:text-yellow-100 transition-all">
                            <i class="fas fa-envelope mr-2 text-sm"></i>
                            ana.hergueta@southwinesacademy.com
                        </a>
                        <br>
                        <a href="tel:+34649446120" 
                           class="inline-flex items-center text-yellow-300 hover:text-yellow-100 transition-all">
                            <i class="fas fa-phone-alt mr-2 text-sm"></i>
                            649 44 61 20
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pilar Pérez Card -->
        <div class="group relative" data-aos="fade-left">
            <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 shadow-2xl transform transition-all duration-300 hover:border-yellow-400/50 hover:shadow-yellow-500/20">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-yellow-500/10 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="flex flex-col items-center relative z-10">
                    <div class="w-32 h-32 mb-6 rounded-full border-2 border-yellow-400/30 p-1 transition-all duration-300 group-hover:border-yellow-400/60">
                        <img src="{{ asset('img/lasegunda.png') }}" alt="Pilar Pérez" 
                             class="w-full h-full object-cover rounded-full transform group-hover:scale-105 transition-transform">
                    </div>
                    
                    <h2 class="text-2xl font-semibold bg-gradient-to-r from-yellow-300 to-yellow-400 bg-clip-text text-transparent mb-2">
                        Pilar Pérez Vaca
                    </h2>
                    <p class="text-lg text-yellow-100 mb-4">Sumiller y docente</p>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-200 leading-relaxed">
                            Mejor sumiller de Sevilla 2016, 2018 y 2019
                        </p>
                    </div>
                    
                    <div class="space-y-2">
                        <a href="mailto:pilar.perez@cesurformacion.com" 
                           class="inline-flex items-center text-yellow-300 hover:text-yellow-100 transition-all">
                            <i class="fas fa-envelope mr-2 text-sm"></i>
                            pilar.perez@cesurformacion.com
                        </a>
                        <br>
                        <a href="tel:+34649446120" 
                           class="inline-flex items-center text-yellow-300 hover:text-yellow-100 transition-all">
                            <i class="fas fa-phone-alt mr-2 text-sm"></i>
                            647 09 46 59
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .font-dancing {
        font-family: 'Dancing Script', cursive;
    }
    [data-aos] {
        transition: all 500ms ease-out;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out-quad'
    });
</script>

@endsection