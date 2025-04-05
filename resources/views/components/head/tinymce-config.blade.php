<script src="https://cdn.tiny.cloud/1/{{ $apiKey }}/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    // Función para detectar si está en modo oscuro
    function isDarkMode() {
        // Verificar primero en localStorage que es la fuente de verdad
        const darkModeInLocalStorage = localStorage.getItem('darkMode') === 'true';

        // Si existe un valor explícito en localStorage, respetarlo
        if (localStorage.getItem('darkMode') !== null) {
            return darkModeInLocalStorage;
        }

        // Si no hay preferencia guardada, usar los otros métodos de detección
        return document.documentElement.classList.contains('dark') ||
            window.matchMedia('(prefers-color-scheme: dark)').matches;
    }

    // Función para inicializar TinyMCE con el tema correcto y soporte para Livewire
    function inicializarTinyMCE(selector = 'textarea#myeditorinstance', livewireComponent = null, livewireModel =
    null) {
        const modoOscuro = isDarkMode();

        tinymce.init({
            selector: selector,
            plugins: 'lists',
            toolbar: 'bold italic | bullist numlist',
            menubar: false,
            statusbar: false,
            branding: false,
            // Cambia el skin basado en el tema actual
            skin: modoOscuro ? 'oxide-dark' : 'oxide',
            content_css: modoOscuro ? 'dark' : 'default',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
            // Configuración para Livewire
            setup: function(editor) {
                // Si estamos vinculando a un componente Livewire
                if (livewireComponent && livewireModel) {
                    // Actualizar Livewire cuando cambia el contenido
                    editor.on('change keyup paste', function() {
                        livewireComponent.set(livewireModel, editor.getContent());
                    });

                    // Sincronizar desde Livewire al editor
                    Livewire.on('tinymce:sync:' + livewireModel.replace('.', '-'), function(value) {
                        if (editor.getContent() !== value) {
                            editor.setContent(value);
                        }
                    });
                }
            }
        });
    }

    // Inicializar TinyMCE al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        inicializarTinyMCE();
    });

    // Detectar cambios en el tema del sistema
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        tinymce.remove();
        inicializarTinyMCE();
    });

    // Para detectar cambios manuales de tema en tu aplicación
    document.addEventListener('themeChanged', function() {
        tinymce.remove();
        inicializarTinyMCE();
    });

    // Función para inicializar TinyMCE con Livewire
    window.initTinymceWithLivewire = function(editorId, componentId, modelName) {
        const selector = 'textarea#' + editorId;
        const component = window.Livewire.find(componentId);

        inicializarTinyMCE(selector, component, modelName);
    };
</script>
