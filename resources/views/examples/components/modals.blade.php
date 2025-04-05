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
                <x-ui-modal x-show="open" @close="open = false" title="Título del modal">
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
                    <x-ui-modal x-show="open" @close="open = false" max-width="sm" title="Modal pequeño">
                        <p class="text-gray-600 dark:text-gray-400">Este es un modal de tamaño pequeño.</p>
                        <x-slot:footer>
                            <x-ui-button @click="open = false" size="sm">Cerrar</x-ui-button>
                        </x-slot:footer>
                    </x-ui-modal>
                </div>
                
                <div x-data="{ open: false }">
                    <x-ui-button @click="open = true">Modal mediano</x-ui-button>
                    <x-ui-modal x-show="open" @close="open = false" max-width="md" title="Modal mediano">
                        <p class="text-gray-600 dark:text-gray-400">Este es un modal de tamaño mediano (predeterminado).</p>
                        <x-slot:footer>
                            <x-ui-button @click="open = false">Cerrar</x-ui-button>
                        </x-slot:footer>
                    </x-ui-modal>
                </div>
                
                <div x-data="{ open: false }">
                    <x-ui-button @click="open = true">Modal grande</x-ui-button>
                    <x-ui-modal x-show="open" @close="open = false" max-width="lg" title="Modal grande">
                        <p class="text-gray-600 dark:text-gray-400">Este es un modal de tamaño grande.</p>
                        <x-slot:footer>
                            <x-ui-button @click="open = false">Cerrar</x-ui-button>
                        </x-slot:footer>
                    </x-ui-modal>
                </div>
                
                <div x-data="{ open: false }">
                    <x-ui-button @click="open = true">Modal extra grande</x-ui-button>
                    <x-ui-modal x-show="open" @close="open = false" max-width="xl" title="Modal extra grande">
                        <p class="text-gray-600 dark:text-gray-400">Este es un modal de tamaño extra grande.</p>
                        <x-slot:footer>
                            <x-ui-button @click="open = false">Cerrar</x-ui-button>
                        </x-slot:footer>
                    </x-ui-modal>
                </div>
            </div>
            
            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;div x-data="{ open: false }"&gt;
    &lt;x-ui-button @click="open = true" size="sm"&gt;Modal pequeño&lt;/x-ui-button&gt;
    &lt;x-ui-modal x-show="open" @close="open = false" max-width="sm" title="Modal pequeño"&gt;
        &lt;p&gt;Este es un modal de tamaño pequeño.&lt;/p&gt;
        &lt;x-slot:footer&gt;
            &lt;x-ui-button @click="open = false" size="sm"&gt;Cerrar&lt;/x-ui-button&gt;
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
                        <x-ui-modal x-show="open" @close="open = false" title="Confirmar eliminación">
                            <div class="text-gray-600 dark:text-gray-400">
                                <p>¿Estás seguro de que deseas eliminar este elemento? Esta acción no se puede deshacer.</p>
                            </div>
                            
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
                        <x-ui-modal x-show="open" @close="open = false" title="Editar perfil">
                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                                    <input type="text" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                    <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
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
