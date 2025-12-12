<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Maneki') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-white text-gray-800">
    <!-- Navigation -->
    <nav x-data="{ isOpen: false }" class="fixed w-full z-30 top-0 bg-white shadow-md transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto" src="{{ asset('image/manekilogo.png') }}" alt="Maneki Logo">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="{{ route('home') }}" class="text-blue-900 hover:text-gold-500 transition-colors duration-300 font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-blue-900 hover:text-gold-500 transition-colors duration-300 font-medium">About</a>
                    <a href="{{ route('education') }}" class="text-blue-900 hover:text-gold-500 transition-colors duration-300 font-medium">Education</a>
                    <a href="{{ route('contact') }}" class="text-blue-900 hover:text-gold-500 transition-colors duration-300 font-medium">Contact</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="isOpen = !isOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-blue-900 hover:text-gold-500 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i :class="isOpen ? 'fas fa-times' : 'fas fa-bars'" class="text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95"
             class="md:hidden bg-white shadow-lg absolute top-full left-0 w-full"
             id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-900 hover:bg-blue-50 hover:text-gold-500">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-900 hover:bg-blue-50 hover:text-gold-500">About</a>
                <a href="{{ route('education') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-900 hover:bg-blue-50 hover:text-gold-500">Education</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-900 hover:bg-blue-50 hover:text-gold-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">Maneki</h3>
                    <p class="mb-4">Meningkatkan literasi keuangan masyarakat Indonesia melalui edukasi yang mudah dipahami dan terpercaya.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gold-400"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-gold-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-gold-400"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-gold-400"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-blue-100 hover:text-gold-400">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-blue-100 hover:text-gold-400">About Us</a></li>
                        <li><a href="{{ route('education') }}" class="text-blue-100 hover:text-gold-400">Education</a></li>
                        <li><a href="{{ route('contact') }}" class="text-blue-100 hover:text-gold-400">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>Jakarta, Indonesia</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3"></i>
                            <span>+62 123 4567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3"></i>
                            <span>info@maneki.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-700 mt-8 pt-8 text-center text-blue-200">
                <p>&copy; {{ date('Y') }} Maneki. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            50: '#FEFDF8',
                            100: '#FCF9E8',
                            200: '#FAF4CC',
                            300: '#F7EC94',
                            400: '#F2DF47',
                            500: '#EAC926',
                            600: '#D8A700',
                            700: '#B88300',
                            800: '#986400',
                            900: '#7D5000',
                        },
                        blue: {
                            900: '#0B2A4E',
                        }
                    }
                }
            }
        }
    </script>
</body>
</html>