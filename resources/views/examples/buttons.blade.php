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
            {{ __('Componentes - Botones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Componente Botón</h1>
                    <a href="{{ route('ai-content-ui.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">← Volver al catálogo</a>
                </div>
                
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Los botones se utilizan para acciones primarias y secundarias, con diferentes estilos y variantes según su propósito.
                </p>
                
                <div class="space-y-12">
                    <!-- Variantes de color -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Variantes de color</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <x-ui-button>Predeterminado</x-ui-button>
                                <x-ui-button color="primary">Primario</x-ui-button>
                                <x-ui-button color="secondary">Secundario</x-ui-button>
                                <x-ui-button color="success">Éxito</x-ui-button>
                                <x-ui-button color="danger">Peligro</x-ui-button>
                                <x-ui-button color="warning">Advertencia</x-ui-button>
                                <x-ui-button color="info">Información</x-ui-button>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-button&gt;Predeterminado&lt;/x-ui-button&gt;
&lt;x-ui-button color="primary"&gt;Primario&lt;/x-ui-button&gt;
&lt;x-ui-button color="secondary"&gt;Secundario&lt;/x-ui-button&gt;
&lt;x-ui-button color="success"&gt;Éxito&lt;/x-ui-button&gt;
&lt;x-ui-button color="danger"&gt;Peligro&lt;/x-ui-button&gt;
&lt;x-ui-button color="warning"&gt;Advertencia&lt;/x-ui-button&gt;
&lt;x-ui-button color="info"&gt;Información&lt;/x-ui-button&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Tamaños -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Tamaños</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap items-end gap-4">
                                <x-ui-button size="xs">Extra pequeño</x-ui-button>
                                <x-ui-button size="sm">Pequeño</x-ui-button>
                                <x-ui-button size="md">Mediano</x-ui-button>
                                <x-ui-button size="lg">Grande</x-ui-button>
                                <x-ui-button size="xl">Extra grande</x-ui-button>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-button size="xs"&gt;Extra pequeño&lt;/x-ui-button&gt;
&lt;x-ui-button size="sm"&gt;Pequeño&lt;/x-ui-button&gt;
&lt;x-ui-button size="md"&gt;Mediano&lt;/x-ui-button&gt;
&lt;x-ui-button size="lg"&gt;Grande&lt;/x-ui-button&gt;
&lt;x-ui-button size="xl"&gt;Extra grande&lt;/x-ui-button&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Estados -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Estados</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <x-ui-button>Normal</x-ui-button>
                                <x-ui-button disabled>Deshabilitado</x-ui-button>
                                <x-ui-button loading>Cargando</x-ui-button>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-button&gt;Normal&lt;/x-ui-button&gt;
&lt;x-ui-button disabled&gt;Deshabilitado&lt;/x-ui-button&gt;
&lt;x-ui-button loading&gt;Cargando&lt;/x-ui-button&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Con iconos -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Con iconos</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <x-ui-button>
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Agregar
                                </x-ui-button>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-button&gt;
    &lt;svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"&gt;&lt;/path&gt;
    &lt;/svg&gt;
    Agregar
&lt;/x-ui-button&gt;</code></pre>
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
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Color del botón: default, primary, secondary, success, danger, warning, info</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">size</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">md</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Tamaño: xs, sm, md, lg, xl</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">type</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">button</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Tipo del botón HTML: button, submit, reset</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">disabled</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">boolean</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">false</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Si el botón está deshabilitado</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">loading</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">boolean</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">false</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Si el botón muestra estado de carga</td>
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
