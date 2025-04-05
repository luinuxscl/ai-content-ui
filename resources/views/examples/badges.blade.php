<x-app-layout>
    <x-slot name="header">
        <div class="me-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
            </svg>
        </div>
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Componentes - Badges') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Componente Badge</h1>
                    <a href="{{ route('ai-content-ui.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">← Volver al catálogo</a>
                </div>
                
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Los badges son pequeños indicadores visuales que se utilizan para destacar información, estados o cantidades.
                </p>
                
                <div class="space-y-12">
                    <!-- Variantes de color -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Variantes de color</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <x-ui-badge>Predeterminado</x-ui-badge>
                                <x-ui-badge color="primary">Primario</x-ui-badge>
                                <x-ui-badge color="secondary">Secundario</x-ui-badge>
                                <x-ui-badge color="success">Éxito</x-ui-badge>
                                <x-ui-badge color="danger">Peligro</x-ui-badge>
                                <x-ui-badge color="warning">Advertencia</x-ui-badge>
                                <x-ui-badge color="info">Información</x-ui-badge>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-badge&gt;Predeterminado&lt;/x-ui-badge&gt;
&lt;x-ui-badge color="primary"&gt;Primario&lt;/x-ui-badge&gt;
&lt;x-ui-badge color="secondary"&gt;Secundario&lt;/x-ui-badge&gt;
&lt;x-ui-badge color="success"&gt;Éxito&lt;/x-ui-badge&gt;
&lt;x-ui-badge color="danger"&gt;Peligro&lt;/x-ui-badge&gt;
&lt;x-ui-badge color="warning"&gt;Advertencia&lt;/x-ui-badge&gt;
&lt;x-ui-badge color="info"&gt;Información&lt;/x-ui-badge&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Tamaños -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Tamaños</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap items-end gap-4">
                                <x-ui-badge size="xs">Extra pequeño</x-ui-badge>
                                <x-ui-badge size="sm">Pequeño</x-ui-badge>
                                <x-ui-badge size="md">Mediano</x-ui-badge>
                                <x-ui-badge size="lg">Grande</x-ui-badge>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-badge size="xs"&gt;Extra pequeño&lt;/x-ui-badge&gt;
&lt;x-ui-badge size="sm"&gt;Pequeño&lt;/x-ui-badge&gt;
&lt;x-ui-badge size="md"&gt;Mediano&lt;/x-ui-badge&gt;
&lt;x-ui-badge size="lg"&gt;Grande&lt;/x-ui-badge&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Variantes de forma -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Variantes de forma</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <x-ui-badge>Predeterminado</x-ui-badge>
                                <x-ui-badge rounded="full">Redondeado</x-ui-badge>
                                <x-ui-badge rounded="none">Cuadrado</x-ui-badge>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-badge&gt;Predeterminado&lt;/x-ui-badge&gt;
&lt;x-ui-badge rounded="full"&gt;Redondeado&lt;/x-ui-badge&gt;
&lt;x-ui-badge rounded="none"&gt;Cuadrado&lt;/x-ui-badge&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Con iconos -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Con iconos</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <x-ui-badge color="success">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Completado
                                </x-ui-badge>
                                
                                <x-ui-badge color="info">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Información
                                </x-ui-badge>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-badge color="success"&gt;
    &lt;svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"&gt;&lt;/path&gt;
    &lt;/svg&gt;
    Completado
&lt;/x-ui-badge&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Casos de uso -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Casos de uso</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="space-y-6">
                                <!-- En una lista -->
                                <div>
                                    <h3 class="text-md font-medium mb-3">En una lista</h3>
                                    <ul class="space-y-2">
                                        <li class="flex items-center justify-between p-3 bg-white dark:bg-gray-700 rounded-md">
                                            <span>Nuevos mensajes</span>
                                            <x-ui-badge color="primary">8</x-ui-badge>
                                        </li>
                                        <li class="flex items-center justify-between p-3 bg-white dark:bg-gray-700 rounded-md">
                                            <span>Tareas pendientes</span>
                                            <x-ui-badge color="warning">4</x-ui-badge>
                                        </li>
                                        <li class="flex items-center justify-between p-3 bg-white dark:bg-gray-700 rounded-md">
                                            <span>Tareas completadas</span>
                                            <x-ui-badge color="success">2</x-ui-badge>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- Con botones -->
                                <div>
                                    <h3 class="text-md font-medium mb-3">Con botones</h3>
                                    <div class="flex flex-wrap gap-4">
                                        <button class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-md">
                                            Carrito
                                            <x-ui-badge color="primary" class="ml-2">3</x-ui-badge>
                                        </button>
                                        
                                        <button class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md">
                                            Notificaciones
                                            <x-ui-badge color="danger" class="ml-2">7</x-ui-badge>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Propiedades -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Propiedades</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700/50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Propiedad</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Tipo</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Predeterminado</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Descripción</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">color</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">default</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Color del badge: default, primary, secondary, success, danger, warning, info</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">size</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">md</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Tamaño: xs, sm, md, lg</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">rounded</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">default</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Forma del borde: default, none, full</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
