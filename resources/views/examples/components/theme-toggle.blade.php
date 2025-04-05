<x-ui-card>
    <x-slot:header>
        <h2 class="text-lg font-semibold">Selector de Tema (Theme Toggle)</h2>
    </x-slot:header>
    
    <div class="space-y-6">
        <div>
            <h3 class="text-md font-medium mb-3">Descripción</h3>
            <p class="text-gray-600 dark:text-gray-400">
                El componente <code>theme-toggle</code> permite a los usuarios cambiar entre el tema claro y oscuro de la aplicación.
                Utiliza Alpine.js para gestionar el estado y almacena la preferencia del usuario en localStorage.
            </p>
        </div>
        
        <div>
            <h3 class="text-md font-medium mb-3">Ejemplo básico</h3>
            <div class="flex items-center space-x-4 p-4 bg-white dark:bg-gray-800 rounded-md shadow">
                <span class="text-gray-700 dark:text-gray-300">Modo actual:</span>
                <span x-data="{darkMode: document.documentElement.classList.contains('dark')}" x-text="darkMode ? 'Oscuro' : 'Claro'" class="font-medium"></span>
                <x-ui-dark-mode-toggle />
            </div>
        </div>
        
        <div class="mt-6 bg-slate-100 dark:bg-slate-800 p-4 rounded-md">
            <pre class="text-sm text-slate-800 dark:text-slate-300 overflow-x-auto"><code>&lt;x-ui-dark-mode-toggle /&gt;</code></pre>
        </div>
    </div>
</x-ui-card>

<x-ui-card class="mt-4">
    <x-slot:header>
        <h2 class="text-lg font-semibold">Funcionamiento</h2>
    </x-slot:header>
    
    <div class="space-y-6">
        <div>
            <h3 class="text-md font-medium mb-3">Características</h3>
            <ul class="list-disc pl-5 space-y-2 text-gray-600 dark:text-gray-400">
                <li>Utiliza <strong>Alpine.js</strong> para gestionar el estado y las interacciones.</li>
                <li>Almacena la preferencia del usuario en <strong>localStorage</strong>.</li>
                <li>Aplica automáticamente la clase <code>dark</code> al elemento <code>html</code>.</li>
                <li>Emite un evento <code>themeChanged</code> que puede ser escuchado por otros componentes.</li>
            </ul>
        </div>
        
        <div>
            <h3 class="text-md font-medium mb-3">Eventos</h3>
            <p class="text-gray-600 dark:text-gray-400">
                Cuando cambia el tema, se dispara un evento <code>themeChanged</code> que puede ser utilizado por otros componentes
                para adaptarse al nuevo tema. Por ejemplo, el editor TinyMCE utiliza este evento para actualizar su apariencia.
            </p>
            <div class="mt-4 p-4 bg-white dark:bg-gray-800 rounded-md shadow">
                <code class="text-sm text-gray-700 dark:text-gray-300">
                    document.addEventListener('themeChanged', function() {<br>
                    &nbsp;&nbsp;// Código para reaccionar al cambio de tema<br>
                    });
                </code>
            </div>
        </div>
    </div>
</x-ui-card>

<x-ui-card class="mt-4">
    <x-slot:header>
        <h2 class="text-lg font-semibold">Configuración</h2>
    </x-slot:header>
    
    <div class="space-y-6">
        <div>
            <h3 class="text-md font-medium mb-3">Integración con Tailwind</h3>
            <p class="text-gray-600 dark:text-gray-400">
                Este componente está diseñado para funcionar con la integración de modo oscuro de Tailwind CSS. 
                Asegúrate de tener configurado Tailwind para soportar el modo oscuro a través de la clase en el archivo <code>tailwind.config.js</code>:
            </p>
            <div class="mt-4 p-4 bg-white dark:bg-gray-800 rounded-md shadow">
                <pre class="text-sm text-gray-700 dark:text-gray-300"><code>// tailwind.config.js
module.exports = {
  darkMode: 'class',
  // resto de la configuración
}</code></pre>
            </div>
        </div>
        
        <div>
            <h3 class="text-md font-medium mb-3">Personalización</h3>
            <p class="text-gray-600 dark:text-gray-400">
                El componente utiliza las clases de DaisyUI <code>swap</code> y <code>swap-rotate</code> para la animación del cambio.
                Puedes personalizar su apariencia modificando las clases CSS o los iconos SVG en el archivo del componente.
            </p>
        </div>
    </div>
</x-ui-card>
