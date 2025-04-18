<p class="text-gray-600 dark:text-gray-300 mb-8">
    Las tarjetas son contenedores flexibles para mostrar contenido y acciones de manera organizada.
</p>

<div class="space-y-12">
    <!-- Tarjeta básica -->
    <section class="bg-gray-50 dark:bg-gray-700 rounded-lg">
        <div class="p-6">
            <div class="max-w-md">
                <x-ui-card title="Basic Card">
                    <p class="text-gray-600 dark:text-gray-400">Este es un ejemplo de una tarjeta básica con título y texto.</p>
                </x-ui-card>
            </div>
            
            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto">
                    <code>&lt;x-ui-card title="Basic Card"&gt;
&lt;p class="mt-2 text-gray-600 dark:text-gray-400"&gt;Este es un ejemplo de una tarjeta básica con título y texto.&lt;/p&gt;
&lt;/x-ui-card&gt;
                    </code>
                </pre>
            </div>
        </div>
    </section>
    
    <!-- Tarjeta con cabecera y pie -->
    <section>
        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Tarjeta con Cabecera y Pie</h2>
        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="max-w-md">
                <x-ui-card>
                    <x-slot:header>
                        <h3 class="text-lg font-medium">Cabecera de la tarjeta</h3>
                    </x-slot:header>
                    
                    <p class="text-gray-600 dark:text-gray-400">Contenido principal de la tarjeta con múltiples secciones.</p>
                    
                    <x-slot:footer>
                        <div class="flex justify-end">
                            <x-ui-button color="primary" size="sm">Acción</x-ui-button>
                        </div>
                    </x-slot:footer>
                </x-ui-card>
            </div>
            
            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto">
                    <code>&lt;x-ui-card&gt;
    &lt;x-slot:header&gt;
        &lt;h3 class="text-lg font-medium"&gt;Cabecera de la tarjeta&lt;/h3&gt;
    &lt;/x-slot:header&gt;
    
    &lt;p class="text-gray-600 dark:text-gray-400"&gt;Contenido principal de la tarjeta con múltiples secciones.&lt;/p&gt;
    
    &lt;x-slot:footer&gt;
        &lt;div class="flex justify-end"&gt;
            &lt;x-ui-button color="primary" size="sm"&gt;Acción&lt;/x-ui-button&gt;
        &lt;/div&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-ui-card&gt;</code></pre>
            </div>
        </div>
    </section>
    
    <!-- Tarjeta con imagen -->
    <section>
        <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 mb-4">Tarjeta con Imagen</h2>
        <div class="p-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="max-w-md">
                <x-ui-card>
                    <img src="https://images.unsplash.com/photo-1572177812156-58036aae439c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                        alt="Imagen de ejemplo" 
                        class="w-full h-48 object-cover rounded-t-lg">
                    
                    <div class="p-4">
                        <h3 class="text-lg font-medium">Tarjeta con imagen</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-400">Las tarjetas pueden contener imágenes, texto y acciones.</p>
                        
                        <div class="mt-4 flex justify-end">
                            <x-ui-button color="primary" size="sm">Ver más</x-ui-button>
                        </div>
                    </div>
                </x-ui-card>
            </div>
            
            <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
                <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-card&gt;
    &lt;img src="https://images.unsplash.com/photo-1572177812156-58036aae439c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
        alt="Imagen de ejemplo" 
        class="w-full h-48 object-cover rounded-t-lg"&gt;
    
    &lt;div class="p-4"&gt;
        &lt;h3 class="text-lg font-medium"&gt;Tarjeta con imagen&lt;/h3&gt;
        &lt;p class="mt-2 text-gray-600 dark:text-gray-400"&gt;Las tarjetas pueden contener imágenes, texto y acciones.&lt;/p&gt;
        
        &lt;div class="mt-4 flex justify-end"&gt;
            &lt;x-ui-button color="primary" size="sm"&gt;Ver más&lt;/x-ui-button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-ui-card&gt;</code></pre>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Contenido para la sección de cabecera</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Contenido para la sección de pie</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">default</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">slot</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">null</td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">Contenido principal de la tarjeta</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
