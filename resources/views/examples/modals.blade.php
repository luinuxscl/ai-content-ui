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
            {{ __('Componentes - Modales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Componente Modal</h1>
                    <a href="{{ route('ai-content-ui.index') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">← Volver al catálogo</a>
                </div>
                
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Los modales son ventanas emergentes que se superponen al contenido principal para mostrar información importante, 
                    formularios o acciones que requieren atención del usuario.
                </p>
                
                <div class="space-y-12">
                    <!-- Modal básico -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Modal básico</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div x-data="{ open: false }">
                                <!-- Botón para abrir el modal -->
                                <x-ui-button @click="open = true">Abrir modal</x-ui-button>
                                
                                <!-- Definición del modal -->
                                <x-ui-modal x-show="open" @close="open = false">
                                    <x-slot:title>Título del modal</x-slot:title>
                                    
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Este es un ejemplo de un modal básico con título, contenido y botones de acción.
                                    </p>
                                    
                                    <x-slot:footer>
                                        <div class="flex justify-end space-x-2">
                                            <x-ui-button @click="open = false" color="secondary">Cancelar</x-ui-button>
                                            <x-ui-button @click="open = false" color="primary">Aceptar</x-ui-button>
                                        </div>
                                    </x-slot:footer>
                                </x-ui-modal>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;div x-data="{ open: false }"&gt;
    &lt;!-- Botón para abrir el modal --&gt;
    &lt;x-ui-button @click="open = true"&gt;Abrir modal&lt;/x-ui-button&gt;
    
    &lt;!-- Definición del modal --&gt;
    &lt;x-ui-modal x-show="open" @close="open = false"&gt;
        &lt;x-slot:title&gt;Título del modal&lt;/x-slot:title&gt;
        
        &lt;p class="text-gray-600 dark:text-gray-400"&gt;
            Este es un ejemplo de un modal básico con título, contenido y botones de acción.
        &lt;/p&gt;
        
        &lt;x-slot:footer&gt;
            &lt;div class="flex justify-end space-x-2"&gt;
                &lt;x-ui-button @click="open = false" color="secondary"&gt;Cancelar&lt;/x-ui-button&gt;
                &lt;x-ui-button @click="open = false" color="primary"&gt;Aceptar&lt;/x-ui-button&gt;
            &lt;/div&gt;
        &lt;/x-slot:footer&gt;
    &lt;/x-ui-modal&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Tamaños de modal -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Tamaños de modal</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="flex flex-wrap gap-4">
                                <div x-data="{ open: false }">
                                    <x-ui-button @click="open = true" size="sm">Modal pequeño</x-ui-button>
                                    <x-ui-modal x-show="open" @close="open = false" max-width="sm">
                                        <x-slot:title>Modal pequeño</x-slot:title>
                                        <p class="text-gray-600 dark:text-gray-400">Este es un modal de tamaño pequeño.</p>
                                        <x-slot:footer>
                                            <x-ui-button @click="open = false">Cerrar</x-ui-button>
                                        </x-slot:footer>
                                    </x-ui-modal>
                                </div>
                                
                                <div x-data="{ open: false }">
                                    <x-ui-button @click="open = true">Modal grande</x-ui-button>
                                    <x-ui-modal x-show="open" @close="open = false" max-width="lg">
                                        <x-slot:title>Modal grande</x-slot:title>
                                        <div class="space-y-4">
                                            <p class="text-gray-600 dark:text-gray-400">Este es un modal de tamaño grande.</p>
                                            <p class="text-gray-600 dark:text-gray-400">Puede contener más contenido y es más ancho que el modal estándar.</p>
                                        </div>
                                        <x-slot:footer>
                                            <x-ui-button @click="open = false">Cerrar</x-ui-button>
                                        </x-slot:footer>
                                    </x-ui-modal>
                                </div>
                            </div>
                            
                            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;div x-data="{ open: false }"&gt;
    &lt;x-ui-button @click="open = true"&gt;Modal pequeño&lt;/x-ui-button&gt;
    &lt;x-ui-modal x-show="open" @close="open = false" max-width="sm"&gt;
        &lt;x-slot:title&gt;Modal pequeño&lt;/x-slot:title&gt;
        &lt;p&gt;Este es un modal de tamaño pequeño.&lt;/p&gt;
        &lt;x-slot:footer&gt;
            &lt;x-ui-button @click="open = false"&gt;Cerrar&lt;/x-ui-button&gt;
        &lt;/x-slot:footer&gt;
    &lt;/x-ui-modal&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Casos de uso -->
                    <section>
                        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Casos de uso</h2>
                        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
                            <div class="space-y-6">
                                <!-- Modal de confirmación -->
                                <div>
                                    <h3 class="text-md font-medium mb-3">Modal de confirmación</h3>
                                    <div x-data="{ open: false }">
                                        <x-ui-button @click="open = true" color="danger">Eliminar elemento</x-ui-button>
                                        <x-ui-modal x-show="open" @close="open = false">
                                            <x-slot:title>Confirmar eliminación</x-slot:title>
                                            <p class="text-gray-600 dark:text-gray-400">¿Estás seguro de que deseas eliminar este elemento? Esta acción no se puede deshacer.</p>
                                            <x-slot:footer>
                                                <div class="flex justify-end space-x-2">
                                                    <x-ui-button @click="open = false" color="secondary">Cancelar</x-ui-button>
                                                    <x-ui-button @click="open = false" color="danger">Eliminar</x-ui-button>
                                                </div>
                                            </x-slot:footer>
                                        </x-ui-modal>
                                    </div>
                                </div>
                                
                                <!-- Modal con formulario -->
                                <div>
                                    <h3 class="text-md font-medium mb-3">Modal con formulario</h3>
                                    <div x-data="{ open: false }">
                                        <x-ui-button @click="open = true" color="primary">Editar perfil</x-ui-button>
                                        <x-ui-modal x-show="open" @close="open = false" max-width="md">
                                            <x-slot:title>Editar perfil</x-slot:title>
                                            <div class="space-y-4">
                                                <div>
                                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                                                    <input type="text" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                                </div>
                                                <div>
                                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                                    <input type="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                                </div>
                                            </div>
                                            <x-slot:footer>
                                                <div class="flex justify-end space-x-2">
                                                    <x-ui-button @click="open = false" color="secondary">Cancelar</x-ui-button>
                                                    <x-ui-button @click="open = false" color="primary">Guardar</x-ui-button>
                                                </div>
                                            </x-slot:footer>
                                        </x-ui-modal>
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
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">title</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Título del modal</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">footer</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Contenido del pie del modal</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">max-width</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">string</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">md</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Ancho máximo del modal: sm, md, lg, xl, 2xl, full</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">closeable</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">boolean</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">true</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Si el modal se puede cerrar con el botón X o haciendo clic fuera</td>
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
