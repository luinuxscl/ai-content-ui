@props(['language' => 'php', 'code' => 'echo "Debug test";'])

<div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg">
    <h3 class="text-lg font-medium mb-4">Depuración de Prism.js</h3>

    <!-- Prism.js Test -->
    <div class="mb-6">
        <h4 class="text-md font-medium mb-2">1. Test de Prism.js - Código Incrustado</h4>
        <pre><code class="language-php">$variable = 'test';
function debugTest() {
    return true;
}</code></pre>
    </div>

    <!-- Direct Script Test -->
    <div class="mb-6">
        <h4 class="text-md font-medium mb-2">2. Test con Script Directo</h4>
        <pre id="test-code"><code class="language-php">$anotherVar = 'debug';
function anotherTest() {
    return false;
}</code></pre>
    </div>

    <!-- User Content Test -->
    <div class="mb-6">
        <h4 class="text-md font-medium mb-2">3. Test con Contenido del Usuario</h4>
        <pre><code class="language-{{ $language }}">{{ $code }}</code></pre>
    </div>

    <!-- Browser Info -->
    <div class="border-t pt-4 mt-4">
        <h4 class="text-md font-medium mb-2">Información de Depuración:</h4>
        <div id="prism-loaded" class="text-red-500 dark:text-red-400">Prism.js no detectado</div>
        <div id="browser-info"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Prism is loaded
        if (window.Prism) {
            document.getElementById('prism-loaded').textContent = 'Prism.js cargado correctamente ✓';
            document.getElementById('prism-loaded').className = 'text-green-500 dark:text-green-400';
            
            // Force highlight all code blocks
            Prism.highlightAll();
            
            // Test direct highlighting
            setTimeout(function() {
                var testElement = document.getElementById('test-code').querySelector('code');
                if (testElement) {
                    Prism.highlightElement(testElement);
                }
            }, 500);
        }
        
        // Browser info
        const browserInfo = document.getElementById('browser-info');
        browserInfo.innerHTML = 'Navegador: ' + navigator.userAgent + '<br>' +
                               'Hora: ' + new Date().toLocaleTimeString();
                               
        // List loaded scripts
        const scripts = document.querySelectorAll('script');
        const scriptsList = document.createElement('div');
        scriptsList.className = 'mt-2';
        scriptsList.innerHTML = '<strong>Scripts cargados (' + scripts.length + '):</strong><br>';
        scripts.forEach(function(script) {
            if (script.src) {
                const isLoaded = (script.complete === undefined) ? 'Desconocido' : 
                                (script.complete ? 'Cargado ✓' : 'No cargado ✗');
                scriptsList.innerHTML += '<span class="text-xs">' + script.src.split('/').pop() + ' - ' + isLoaded + '</span><br>';
            }
        });
        browserInfo.appendChild(scriptsList);
        
        // Check CSS
        const styleSheets = document.styleSheets;
        const cssList = document.createElement('div');
        cssList.className = 'mt-2';
        cssList.innerHTML = '<strong>CSS cargados (' + styleSheets.length + '):</strong><br>';
        
        for (let i = 0; i < styleSheets.length; i++) {
            try {
                const sheet = styleSheets[i];
                if (sheet.href) {
                    cssList.innerHTML += '<span class="text-xs">' + sheet.href.split('/').pop() + '</span><br>';
                }
            } catch (e) {
                cssList.innerHTML += '<span class="text-xs">Error accediendo a stylesheet: ' + e.message + '</span><br>';
            }
        }
        browserInfo.appendChild(cssList);
    });
</script>

<!-- Incluye Prism.js localmente para este test -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>
