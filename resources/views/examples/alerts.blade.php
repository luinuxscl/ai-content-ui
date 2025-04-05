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
            {{ __('Componentes - Alertas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Componente Alerta</h1>
                    <a href="{{ route('ai-content-ui.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">← Volver al catálogo</a>
                </div>
                
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Las alertas proporcionan mensajes informativos, de advertencia, éxito o error para comunicar estados importantes al usuario.
                </p>
                
                <div class="space-y-12">
                    <!-- Tipos de alertas -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Tipos de alertas</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="space-y-4">
                                <x-ui-alert type="info">
                                    Esta es una alerta informativa con detalles importantes.
                                </x-ui-alert>
                                
                                <x-ui-alert type="success">
                                    La operación se ha completado con éxito.
                                </x-ui-alert>
                                
                                <x-ui-alert type="warning">
                                    Atención, esta acción podría tener consecuencias.
                                </x-ui-alert>
                                
                                <x-ui-alert type="danger">
                                    Ha ocurrido un error al procesar la solicitud.
                                </x-ui-alert>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-alert type="info"&gt;
                Esta es una alerta informativa con detalles importantes.
            &lt;/x-ui-alert&gt;
            
            &lt;x-ui-alert type="success"&gt;
                La operación se ha completado con éxito.
            &lt;/x-ui-alert&gt;
            
            &lt;x-ui-alert type="warning"&gt;
                Atención, esta acción podría tener consecuencias.
            &lt;/x-ui-alert&gt;
            
            &lt;x-ui-alert type="danger"&gt;
                Ha ocurrido un error al procesar la solicitud.
            &lt;/x-ui-alert&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Alertas con título -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Alertas con título</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="space-y-4">
                                <x-ui-alert type="info" title="Información importante">
                                    Los cambios realizados afectarán a todos los usuarios activos.
                                </x-ui-alert>
                                
                                <x-ui-alert type="success" title="¡Operación exitosa!">
                                    Los datos han sido actualizados correctamente en la base de datos.
                                </x-ui-alert>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-alert type="info" title="Información importante"&gt;
                Los cambios realizados afectarán a todos los usuarios activos.
            &lt;/x-ui-alert&gt;
            
            &lt;x-ui-alert type="success" title="¡Operación exitosa!"&gt;
                Los datos han sido actualizados correctamente en la base de datos.
            &lt;/x-ui-alert&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Alertas descartables -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Alertas descartables</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="space-y-4">
                                <x-ui-alert type="warning" dismissible>
                                    Esta alerta puede ser cerrada por el usuario haciendo clic en el botón de cierre.
                                </x-ui-alert>
                                
                                <x-ui-alert type="info" title="Actualización pendiente" dismissible>
                                    Hay una nueva versión del sistema disponible. Actualice para obtener las últimas características.
                                </x-ui-alert>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-alert type="warning" dismissible&gt;
                Esta alerta puede ser cerrada por el usuario haciendo clic en el botón de cierre.
            &lt;/x-ui-alert&gt;
            
            &lt;x-ui-alert type="info" title="Actualización pendiente" dismissible&gt;
                Hay una nueva versión del sistema disponible. Actualice para obtener las últimas características.
            &lt;/x-ui-alert&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Alertas con iconos -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Alertas con iconos</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="space-y-4">
                                <x-ui-alert type="info" icon>
                                    Los iconos ayudan a identificar rápidamente el tipo de alerta.
                                </x-ui-alert>
                                
                                <x-ui-alert type="success" icon>
                                    Proceso completado exitosamente.
                                </x-ui-alert>
                                
                                <x-ui-alert type="warning" icon>
                                    Verifique la información antes de continuar.
                                </x-ui-alert>
                                
                                <x-ui-alert type="danger" icon>
                                    No se pudo completar la acción solicitada.
                                </x-ui-alert>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-alert type="info" icon&gt;
                Los iconos ayudan a identificar rápidamente el tipo de alerta.
            &lt;/x-ui-alert&gt;
            
            &lt;x-ui-alert type="success" icon&gt;
                Proceso completado exitosamente.
            &lt;/x-ui-alert&gt;</code></pre>
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
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">type</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">info</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Tipo de alerta: info, success, warning, danger</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">title</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Título opcional para la alerta</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">dismissible</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">boolean</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">false</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Si la alerta puede ser cerrada</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">icon</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">boolean</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">false</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Si la alerta debe mostrar un icono según su tipo</td>
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
