<x-app-layout>
    <x-slot name="header">
        <div class="me-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
            </svg>
        </div>
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ isset($componentName) ? __('Componentes - ' . ucfirst($componentName)) : __('Catálogo de Componentes - AI Content UI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                @if(isset($componentName))
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Componente {{ ucfirst($componentName) }}</h1>
                        <a href="{{ route('ai-content-ui.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">← Volver al catálogo</a>
                    </div>
                    
                    @php
                        $viewName = 'ai-content-ui::examples.components.' . $componentName;
                        $viewExists = view()->exists($viewName);
                    @endphp

                    @if($viewExists)
                        @include($viewName)
                    @else
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                            <p class="font-bold">Error</p>
                            <p>No se pudo encontrar el componente '{{ $componentName }}'. Ruta de vista buscada: {{ $viewName }}</p>
                        </div>
                    @endif
                @else
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Catálogo de Componentes UI</h1>
                    
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Esta es una muestra de los componentes disponibles en el paquete AI Content UI. 
                        Selecciona un componente para ver ejemplos de uso y variantes.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Componentes básicos (Fase 1) -->
                    <x-ui-card title="Botones" class="">
                        <x-slot name="icon">
                            <i class="fa-solid fa-hand-pointer text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Componentes de botón con diferentes estilos, tamaños y estados.</p>
                            <a href="{{ route('ai-content-ui.show', 'buttons') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>

                    <x-ui-card title="Tarjetas" class="">
                        <x-slot name="icon">
                            <i class="fa-brands fa-css text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Contenedores flexibles para organizar contenido y acciones.</p>
                            <a href="{{ route('ai-content-ui.show', 'cards') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>
                    
                    <x-ui-card title="Alertas" class="">
                        <x-slot name="icon">
                            <i class="fa-brands fa-bell text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Notificaciones para mostrar mensajes importantes al usuario.</p>
                            <a href="{{ route('ai-content-ui.show', 'alerts') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>
                    
                    <x-ui-card title="Badges" class="">
                        <x-slot name="icon">
                            <i class="fa-brands fa-bell text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Indicadores visuales pequeños para destacar información.</p>
                            <a href="{{ route('ai-content-ui.show', 'badges') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>
                    
                    <x-ui-card title="Modales" class="">
                        <x-slot name="icon">
                            <i class="fa-brands fa-bell text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Ventanas superpuestas para mostrar información o acciones importantes.</p>
                            <a href="{{ route('ai-content-ui.show', 'modals') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>

                    <x-ui-card title="Dropdowns" class="">
                        <x-slot name="icon">
                            <i class="fa-brands fa-bell text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Menús desplegables para mostrar opciones o acciones adicionales.</p>
                            <a href="{{ route('ai-content-ui.show', 'dropdowns') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>

                    <x-ui-card title="Theme Toggle" class="">
                        <x-slot name="icon">
                            <i class="fa-brands fa-bell text-custom me-2"></i>
                        </x-slot>
                        <div class="p-4">
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Control para cambiar entre tema claro y oscuro.</p>
                            <a href="{{ route('ai-content-ui.show', 'theme-toggle') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium">Ver componente →</a>
                        </div>
                    </x-ui-card>
                    
                    </div>
                    
                    <div class="mt-10 starter-bg p-6 rounded-lg border border-gray-200 dark:border-gray-700">
                        <h2 class="starter-text-strong text-xl mb-4">Roadmap de Desarrollo</h2>
                    
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300 rounded-full flex items-center justify-center mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-200">Fase 1: Estructura Base</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Componentes Blade básicos, sistema de temas, configuración y assets</p>
                            </div>
                        </li>
                        
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 bg-gray-100 text-gray-500 dark:bg-gray-800 dark:text-gray-400 rounded-full flex items-center justify-center mt-0.5">
                                <span class="text-xs">2</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-200">Fase 2: Componentes de Formulario</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Inputs, Select, Textarea, Checkbox, Radio, validación y componentes avanzados</p>
                            </div>
                        </li>
                        
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 bg-gray-100 text-gray-500 dark:bg-gray-800 dark:text-gray-400 rounded-full flex items-center justify-center mt-0.5">
                                <span class="text-xs">3</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-200">Fase 3: Componentes de Datos</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Tablas responsive, paginación, tarjetas de datos y estadísticas</p>
                            </div>
                        </li>
                        
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 bg-gray-100 text-gray-500 dark:bg-gray-800 dark:text-gray-400 rounded-full flex items-center justify-center mt-0.5">
                                <span class="text-xs">4</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-200">Fase 4: Layouts y Navegación</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">AppLayout principal, navegación, menús, migas de pan y tabs</p>
                            </div>
                        </li>
                        
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-5 h-5 bg-gray-100 text-gray-500 dark:bg-gray-800 dark:text-gray-400 rounded-full flex items-center justify-center mt-0.5">
                                <span class="text-xs">5</span>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-200">Fase 5: Documentación y Refinamiento</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Catálogo visual de componentes, guías de uso y mejoras de rendimiento y accesibilidad</p>
                            </div>
                        </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
