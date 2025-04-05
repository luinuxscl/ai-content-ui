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
            {{ __('Componentes - Dropdowns') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Componente Dropdown</h1>
                    <a href="{{ route('ai-content-ui.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">← Volver al catálogo</a>
                </div>
                
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Los dropdowns son menús desplegables que permiten mostrar una lista de opciones o acciones al hacer click en un botón desencadenador.
                </p>
                
                <div class="space-y-12">
                    <!-- Dropdown básico -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Dropdown básico</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <div x-data="{ open: false }">
                                    <x-ui-dropdown>
                                        <x-slot:trigger>
                                            <button @click="open = !open" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                                                Opciones
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-slot:trigger>
                                        
                                        <x-slot:content>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Opción 1</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Opción 2</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Opción 3</a>
                                        </x-slot:content>
                                    </x-ui-dropdown>
                                </div>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-dropdown&gt;
    &lt;x-slot:trigger&gt;
        &lt;button class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md"&gt;
            Opciones
            &lt;svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"&gt;
                &lt;path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
    &lt;/x-slot:trigger&gt;
    
    &lt;x-slot:content&gt;
        &lt;a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600"&gt;Opción 1&lt;/a&gt;
        &lt;a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600"&gt;Opción 2&lt;/a&gt;
        &lt;a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600"&gt;Opción 3&lt;/a&gt;
    &lt;/x-slot:content&gt;
&lt;/x-ui-dropdown&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Dropdown con alineación -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Alineación del dropdown</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <div>
                                    <x-ui-dropdown align="left">
                                        <x-slot:trigger>
                                            <button class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md">
                                                Alineado izquierda
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-slot:trigger>
                                        
                                        <x-slot:content>
                                            <a href="#" class="block px-4 py-2 text-sm">Contenido del dropdown</a>
                                        </x-slot:content>
                                    </x-ui-dropdown>
                                </div>
                                
                                <div>
                                    <x-ui-dropdown align="right">
                                        <x-slot:trigger>
                                            <button class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md">
                                                Alineado derecha
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-slot:trigger>
                                        
                                        <x-slot:content>
                                            <a href="#" class="block px-4 py-2 text-sm">Contenido del dropdown</a>
                                        </x-slot:content>
                                    </x-ui-dropdown>
                                </div>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-dropdown align="left"&gt;
    &lt;!-- Contenido del dropdown --&gt;
&lt;/x-ui-dropdown&gt;

&lt;x-ui-dropdown align="right"&gt;
    &lt;!-- Contenido del dropdown --&gt;
&lt;/x-ui-dropdown&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Dropdown con ancho personalizado -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Ancho personalizado</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <div>
                                    <x-ui-dropdown width="w-64">
                                        <x-slot:trigger>
                                            <button class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md">
                                                Dropdown ancho
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-slot:trigger>
                                        
                                        <x-slot:content>
                                            <div class="p-4">
                                                <p class="text-sm text-gray-700 dark:text-gray-300">Este dropdown tiene un ancho personalizado de 16rem (w-64).</p>
                                            </div>
                                        </x-slot:content>
                                    </x-ui-dropdown>
                                </div>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-dropdown width="w-64"&gt;
    &lt;!-- Contenido del dropdown --&gt;
&lt;/x-ui-dropdown&gt;</code></pre>
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
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">align</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">left</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Alineación del dropdown: left, right</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">width</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">w-48</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Ancho del dropdown (clase Tailwind CSS)</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">trigger</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Elemento que activa el dropdown</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">content</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Contenido del dropdown</td>
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
