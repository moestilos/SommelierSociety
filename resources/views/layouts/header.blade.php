<style>
    @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=EB+Garamond:wght@400;500;600&family=Jaro:opsz@6..72&family=Sofadi+One&display=swap');

    </style>
<header class="text-gray-400 bg-black p-2 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <!-- Logo VinoA -->
            <img src="{{ asset('img/nuevoLogo.png') }}" alt="Logo VinoA" class="w-24 h-20 rounded-full mr-3">
            <span class="ml-3 text-3xl font-amatic">South Wine Academy</span>
        </a>

        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center space-x-4">
            <a href="{{ url('/dashboard') }}" class="hover:text-yellow-400">Home</a>
            <a href="{{ url('/contacto') }}" class="hover:text-yellow-400">About Us</a>
            <a href="{{ url('/contact') }}" class="hover:text-yellow-400">Contact Us</a>
            <a href="" class="hover:text-yellow-400">Store</a>
            
            <!-- Dropdown Container -->
            <div class="relative">
                <!-- Dropdown Toggle -->
                <button id="account-menu" class="bg-gray-800 text-white px-3 py-2 rounded hover:text-yellow-400 transition duration-300 ease-in-out transform hover:scale-105">
                    Cuenta ▼
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdown-content" class="hidden absolute right-0 mt-2 w-48 bg-black border border-gray-700 rounded-lg shadow-lg py-2 z-50">
                    @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block w-full text-left px-4 py-2 text-white hover:bg-gray-800">
                            Cerrar sesión
                        </button>
                    @else
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-white hover:bg-gray-800">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="block px-4 py-2 text-white hover:bg-gray-800">Registrarse</a>
                    @endauth
                </div>
            </div>

            <button id="theme-toggle" class="bg-gray-800 text-white px-3 py-2 rounded hover:text-yellow-400 transition duration-300 ease-in-out transform hover:scale-105">
                Modo Oscuro
            </button>
        </nav>
    </div>
</header>

<script>
    // Dropdown Toggle
    const accountMenu = document.getElementById('account-menu');
    const dropdownContent = document.getElementById('dropdown-content');

    accountMenu.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownContent.classList.toggle('hidden');
    });

    // Cerrar dropdown al hacer click fuera
    document.addEventListener('click', (e) => {
        if (!dropdownContent.contains(e.target) && !accountMenu.contains(e.target)) {
            dropdownContent.classList.add('hidden');
        }
    });

    // Evitar que se cierre al hacer click dentro del dropdown
    dropdownContent.addEventListener('click', (e) => {
        e.stopPropagation();
    });
</script>