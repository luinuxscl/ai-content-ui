<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Test de Componentes
        </h2>
    </x-slot>

    <div class="container mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold mb-6">Demostración de Code Block</h1>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">JavaScript</h2>
            <x-code-block language="javascript" code="function sumar(a, b) {
    return a + b;
}

const resultado = sumar(5, 3);
console.log('Resultado:', resultado);"></x-code-block>
        </div>
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">CSS</h2>
            <x-code-block language="css" code=".container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    background-color: #333;
    color: white;
    padding: 10px 20px;
}"></x-code-block>
        </div>
    </div>
</x-app-layout>

@push('scripts')
<script>
    // Función de utilidad para agregar mensajes a la consola
    function debugLog(message, type = 'info') {
        const console = document.getElementById('debug-console');
        const timestamp = new Date().toLocaleTimeString();
        const classes = {
            'info': 'text-blue-400',
            'success': 'text-green-400',
            'error': 'text-red-400',
            'warning': 'text-yellow-400'
        };
        
        console.innerHTML += `<div class="${classes[type] || classes.info}">
            [${timestamp}] ${message}
        </div>`;
        
        // Scroll al final
        console.scrollTop = console.scrollHeight;
    }

    document.addEventListener('DOMContentLoaded', function() {
        debugLog('Página cargada. Iniciando depuración...', 'info');
        
        // Verificar si Prism está disponible
        if (window.Prism) {
            debugLog('✓ Prism.js está disponible globalmente', 'success');
            
            // Verificar componentes y plugins cargados
            const components = [];
            for (const key in Prism.languages) {
                if (typeof Prism.languages[key] === 'object') {
                    components.push(key);
                }
            }
            
            debugLog(`✓ Lenguajes de Prism cargados: ${components.join(', ')}`, 'success');
            
            // Iniciar resaltado manual
            debugLog('Ejecutando Prism.highlightAll() manualmente...', 'info');
            try {
                Prism.highlightAll();
                debugLog('✓ Prism.highlightAll() ejecutado correctamente', 'success');
            } catch (error) {
                debugLog(`✗ Error al ejecutar Prism.highlightAll(): ${error.message}`, 'error');
            }
        } else {
            debugLog('✗ Prism.js NO está disponible globalmente', 'error');
        }
        
        // Inspeccionar estilos aplicados
        debugLog('Inspeccionando estilos CSS aplicados...', 'info');
        const codeElements = document.querySelectorAll('code[class*="language-"]');
        debugLog(`Encontrados ${codeElements.length} elementos de código para resaltar`, 'info');
        
        codeElements.forEach((element, index) => {
            const styles = window.getComputedStyle(element);
            const background = styles.backgroundColor;
            const color = styles.color;
            const tokens = element.querySelectorAll('.token');
            
            debugLog(`Elemento #${index+1}: color=${color}, background=${background}, tokens=${tokens.length}`, tokens.length > 0 ? 'success' : 'warning');
        });
        
        // Cargar Prism explícitamente para este test
        debugLog('Cargando Prism.js explícitamente para esta página...', 'info');
        
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js';
        script.onload = function() {
            debugLog('✓ Prism.js cargado explícitamente', 'success');
            const phpScript = document.createElement('script');
            phpScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js';
            phpScript.onload = function() {
                debugLog('✓ Componente PHP cargado explícitamente', 'success');
                // Intentar resaltar de nuevo
                if (window.Prism) {
                    debugLog('Ejecutando Prism.highlightAll() de nuevo...', 'info');
                    Prism.highlightAll();
                    setTimeout(function() {
                        // Verificar si los tokens fueron creados
                        const tokensAfter = document.querySelectorAll('.token');
                        debugLog(`Después de la recarga: ${tokensAfter.length} tokens generados`, tokensAfter.length > 0 ? 'success' : 'error');
                    }, 500);
                }
            };
            document.head.appendChild(phpScript);
        };
        document.head.appendChild(script);
    });

    // También verificar al finalizar la carga
    window.addEventListener('load', function() {
        debugLog('Evento window.load disparado', 'info');
        
        // Verificar si los tokens existen
        const allTokens = document.querySelectorAll('.token');
        debugLog(`Total de tokens generados: ${allTokens.length}`, 'info');
        
        if (allTokens.length === 0) {
            debugLog('No se encontraron tokens. Intentando resaltar nuevamente...', 'warning');
            
            // Intentar resaltar manualmente
            const codeElements = document.querySelectorAll('code[class*="language-"]');
            codeElements.forEach((element, index) => {
                try {
                    if (window.Prism) {
                        Prism.highlightElement(element);
                        debugLog(`Resaltado manual para elemento #${index+1}`, 'info');
                    }
                } catch (e) {
                    debugLog(`Error al resaltar elemento #${index+1}: ${e.message}`, 'error');
                }
            });
            
            // Verificar de nuevo
            setTimeout(function() {
                const tokensAfter = document.querySelectorAll('.token');
                debugLog(`Después del intento manual: ${tokensAfter.length} tokens generados`, 'info');
            }, 1000);
        }
    });
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css">
<style>
    /* Estilos adicionales para depuración */
    #debug-console {
        font-family: 'Courier New', monospace;
        line-height: 1.5;
    }
    
    /* Estilos de resaltado de respaldo */
    code[class*="language-"] {
        color: #f8f8f2 !important;
    }
    .token.comment { color: #6A9955 !important; }
    .token.string { color: #ce9178 !important; }
    .token.number { color: #b5cea8 !important; }
    .token.keyword { color: #569cd6 !important; }
    .token.function { color: #dcdcaa !important; }
    .token.variable { color: #9cdcfe !important; }
</style>
@endpush
