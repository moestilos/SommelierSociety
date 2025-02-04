<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - South Wine Academy</title>
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-[#DEB887] via-[#D4B88C] to-[#8B4513] dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 backdrop-blur-sm">
        <div class="max-w-md w-full space-y-8 bg-gradient-to-br from-[#E8DCC4] to-[#C4A484] rounded-xl p-10 shadow-2xl border border-[#B38B6D]/30 transition-all duration-300">
            <div class="text-center">
                <div class="mx-auto relative w-24 h-24 mb-6">
                    <div class="absolute inset-0 bg-[#B38B6D]/20 rounded-full blur-md"></div>
                    <img src="{{ asset('img/nuevoLogo.png') }}" alt="Logo" class="relative z-10 w-full h-full object-contain rounded-full border-2 border-[#B38B6D]/30">
                </div>
                <h2 class="font-cinzel text-4xl text-[#4A3728] mb-2">
                    South Wine Academy
                </h2>
                <p class="font-garamond text-[#5C4033]/80 italic">
                    "Where passion meets the vine"
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
                @csrf

                <div class="space-y-5">
                    <!-- Name Input -->
                    <div>
                        <div class="relative group">
                            <input 
                                id="name" 
                                name="name" 
                                type="text" 
                                value="{{ old('name') }}"
                                required 
                                autofocus 
                                autocomplete="name"
                                class="w-full pl-12 pr-4 py-3 bg-[#F5E6CA]/5 border border-[#B38B6D]/30 rounded-lg text-[#4A3728] placeholder-[#8B4513]/50 focus:border-[#8B4513] input-glow transition-all duration-300 font-garamond"
                                placeholder="Full name"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-6 h-6 text-[#8B4513]/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-[#8B4513] font-garamond">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div>
                        <div class="relative group">
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                value="{{ old('email') }}"
                                required 
                                autocomplete="email"
                                class="w-full pl-12 pr-4 py-3 bg-[#F5E6CA]/5 border border-[#B38B6D]/30 rounded-lg text-[#4A3728] placeholder-[#8B4513]/50 focus:border-[#8B4513] input-glow transition-all duration-300 font-garamond"
                                placeholder="Sommelier's email"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-6 h-6 text-[#8B4513]/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-[#8B4513] font-garamond">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div>
                        <div class="relative group">
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                required 
                                autocomplete="new-password"
                                class="w-full pl-12 pr-4 py-3 bg-[#F5E6CA]/5 border border-[#B38B6D]/30 rounded-lg text-[#4A3728] placeholder-[#8B4513]/50 focus:border-[#8B4513] input-glow transition-all duration-300 font-garamond"
                                placeholder="Cellar master's key"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-6 h-6 text-[#8B4513]/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-[#8B4513] font-garamond">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Input -->
                    <div>
                        <div class="relative group">
                            <input 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                type="password" 
                                required 
                                autocomplete="new-password"
                                class="w-full pl-12 pr-4 py-3 bg-[#F5E6CA]/5 border border-[#B38B6D]/30 rounded-lg text-[#4A3728] placeholder-[#8B4513]/50 focus:border-[#8B4513] input-glow transition-all duration-300 font-garamond"
                                placeholder="Confirm key"
                            />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-6 h-6 text-[#8B4513]/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg font-cinzel text-[#F5E6CA] bg-[#8B4513]/80 hover:bg-[#A0522D]/90 hover:shadow-lg transition-all duration-300 group">
                    <span>Join the Vineyard</span>
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-[#B38B6D]/30"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-transparent text-[#8B4513]/70 font-garamond italic">
                            Or uncork with
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <a href="#" class="w-full flex items-center justify-center p-3 border border-[#B38B6D]/30 rounded-lg hover:bg-[#B38B6D]/20 transition duration-300 group">
                        <svg class="w-6 h-6 text-[#4A3728] group-hover:text-[#8B4513] transition duration-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"/>
                        </svg>
                    </a>
                    
                    <a href="#" class="w-full flex items-center justify-center p-3 border border-[#B38B6D]/30 rounded-lg hover:bg-[#B38B6D]/20 transition duration-300 group">
                        <svg class="w-6 h-6 text-[#4A3728] group-hover:text-[#8B4513] transition duration-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z"/>
                        </svg>
                    </a>
                </div>

                <p class="text-center text-sm text-[#5C4033]/80 font-garamond">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-[#8B4513] hover:text-[#A0522D] transition duration-300 italic">
                        Sign in
                    </a>
                </p>
            </form>
        </div>
    </div>

    <!-- Dark Mode Toggle Script -->
    <script>
        const html = document.documentElement;
        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }
    </script>
</body>
</html>