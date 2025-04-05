<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AI Content UI - Componentes')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine JS -->
    <script defer src="https://cdn.alpinejs.dev/dist/cdn.min.js"></script>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Estilos personalizados -->
    <style>
        [x-cloak] { display: none !important; }
        
        .box-custom {
          @apply bg-white dark:bg-gray-800 dark:bg-linear-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700;
        }
        
        .text-custom {
          @apply text-gray-900 dark:text-gray-100;
          @apply font-medium;
        }
    </style>
    
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-100 dark:bg-gray-900" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">
    <div class="min-h-screen">
        <!-- Barra de navegación -->
        <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('ai-content-ui.index') }}" class="text-xl font-bold text-gray-800 dark:text-white">
                                AI Content UI
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <button 
                            @click="darkMode = !darkMode"
                            class="p-2 rounded-md text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none"
                        >
                            <svg x-show="!darkMode" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                            <svg x-show="darkMode" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Contenido -->
                @yield('content')
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700 py-4 mt-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} Laravel AI Content Platform - Componentes UI
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
