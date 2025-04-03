<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Componentes - AI Content UI</title>
    <!-- Tailwind CSS y DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Estilos de AI Content UI -->
    <style>
        /* Incluimos los estilos básicos para la demo */
        :root {
          --primary: #4f46e5;
          --secondary: #64748b;
          --accent: #0ea5e9;
          --neutral: #3d4451;
          --base-100: #ffffff;
          --base-200: #f8fafc;
          --base-300: #e2e8f0;
          --base-content: #1e293b;
          --info: #3abff8;
          --success: #36d399;
          --warning: #fbbd23;
          --error: #f87272;
        }

        [data-theme="dark"] {
          --primary: #6366f1;
          --secondary: #94a3b8;
          --accent: #38bdf8;
          --neutral: #2a323c;
          --base-100: #1e293b;
          --base-200: #0f172a;
          --base-300: #020617;
          --base-content: #f1f5f9;
        }

        .btn {
          @apply inline-flex items-center justify-center px-4 py-2 border border-transparent 
                 font-medium rounded-md focus:outline-none focus:ring-2 
                 focus:ring-offset-2 transition-colors;
        }

        .btn-primary {
          @apply bg-primary text-white hover:bg-primary/90 focus:ring-primary/50;
        }

        .btn-secondary {
          @apply bg-secondary text-white hover:bg-secondary/90 focus:ring-secondary/50;
        }

        .card {
          @apply bg-base-100 rounded-lg shadow overflow-hidden;
        }

        .card-body {
          @apply p-6;
        }

        .card-header {
          @apply p-6 pb-0;
        }

        .card-footer {
          @apply p-6 pt-0;
        }

        .alert {
          @apply p-4 rounded-md mb-4 flex items-start;
        }

        .alert-info {
          @apply bg-info/20 text-info;
        }

        .alert-success {
          @apply bg-success/20 text-success;
        }

        .badge {
          @apply inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium;
        }

        .badge-primary {
          @apply bg-primary/10 text-primary;
        }

        .modal {
          @apply fixed inset-0 z-50 overflow-y-auto hidden;
        }

        .modal.show {
          @apply block;
        }

        .dropdown {
          @apply relative inline-block;
        }

        .dropdown-menu {
          @apply absolute z-10 mt-1 rounded-md shadow-lg bg-base-100 border border-base-300 min-w-[10rem] py-1;
        }
    </style>
</head>
<body class="bg-base-200 p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-base-content">Test de Componentes AI Content UI</h1>
            <button id="theme-toggle" class="btn btn-ghost">
                <i class="fas fa-moon dark:hidden"></i>
                <i class="fas fa-sun hidden dark:inline"></i>
            </button>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Sección de Botones -->
            <div class="card">
                <div class="card-header">
                    <h2 class="text-xl font-semibold">Botones</h2>
                </div>
                <div class="card-body space-y-4">
                    <div class="flex flex-wrap gap-2">
                        <button class="btn btn-primary">Primario</button>
                        <button class="btn btn-secondary">Secundario</button>
                        <button class="btn btn-accent">Acento</button>
                        <button class="btn btn-success">Éxito</button>
                        <button class="btn btn-warning">Advertencia</button>
                        <button class="btn btn-error">Error</button>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <button class="btn btn-primary btn-sm">Pequeño</button>
                        <button class="btn btn-primary">Normal</button>
                        <button class="btn btn-primary btn-lg">Grande</button>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <button class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i>
                            Guardar
                        </button>
                        <button class="btn btn-error">
                            Eliminar
                            <i class="fas fa-trash ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sección de Tarjetas -->
            <div class="card">
                <div class="card-header">
                    <h2 class="text-xl font-semibold">Tarjetas</h2>
                </div>
                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="font-bold">Título de tarjeta</h3>
                        </div>
                        <div class="card-body">
                            <p>Este es un ejemplo de contenido de una tarjeta. Puedes incluir cualquier tipo de contenido aquí.</p>
                        </div>
                        <div class="card-footer flex justify-end">
                            <button class="btn btn-primary btn-sm">Acción</button>
                        </div>
                    </div>

                    <div class="card bg-base-300">
                        <div class="card-body">
                            <p>Tarjeta simple sin cabecera ni pie</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Alertas -->
            <div class="card">
                <div class="card-header">
                    <h2 class="text-xl font-semibold">Alertas</h2>
                </div>
                <div class="card-body space-y-4">
                    <div class="alert alert-info">
                        <div class="alert-icon">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Información</h4>
                            <div class="alert-description">
                                Esta es una alerta informativa.
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-success">
                        <div class="alert-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Éxito</h4>
                            <div class="alert-description">
                                La operación se completó con éxito.
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning">
                        <div class="alert-icon">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Advertencia</h4>
                            <div class="alert-description">
                                Ten cuidado con esta acción.
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-error">
                        <div class="alert-icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Error</h4>
                            <div class="alert-description">
                                Ocurrió un error al procesar la solicitud.
                            </div>
                        </div>
                        <button type="button" class="alert-close" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sección de Badges y Dropdown -->
            <div class="card">
                <div class="card-header">
                    <h2 class="text-xl font-semibold">Badges y Dropdowns</h2>
                </div>
                <div class="card-body">
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Badges</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="badge badge-primary">Primario</span>
                            <span class="badge badge-secondary">Secundario</span>
                            <span class="badge badge-accent">Acento</span>
                            <span class="badge badge-success">Éxito</span>
                            <span class="badge badge-warning">Advertencia</span>
                            <span class="badge badge-error">Error</span>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-semibold mb-2">Dropdowns</h3>
                        <div class="flex flex-wrap gap-4">
                            <div x-data="{ open: false }" class="dropdown">
                                <button @click="open = !open" @click.away="open = false" class="btn btn-primary dropdown-toggle">
                                    Dropdown
                                </button>
                                <div x-show="open" class="dropdown-menu" x-transition>
                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">Opción 1</a>
                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">Opción 2</a>
                                    <div class="border-t border-base-300 my-1"></div>
                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">Opción 3</a>
                                </div>
                            </div>

                            <div x-data="{ open: false }" class="dropdown">
                                <button @click="open = !open" @click.away="open = false" class="btn btn-secondary dropdown-toggle">
                                    <i class="fas fa-user mr-2"></i>
                                    Usuario
                                </button>
                                <div x-show="open" class="dropdown-menu" x-transition>
                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">
                                        <i class="fas fa-user-circle mr-2"></i>
                                        Perfil
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">
                                        <i class="fas fa-cog mr-2"></i>
                                        Configuración
                                    </a>
                                    <div class="border-t border-base-300 my-1"></div>
                                    <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200 text-error">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                        Cerrar sesión
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ejemplo -->
        <div class="mt-8 card">
            <div class="card-header">
                <h2 class="text-xl font-semibold">Modales</h2>
            </div>
            <div class="card-body">
                <button id="open-modal" class="btn btn-primary">Abrir Modal</button>
            </div>
        </div>

        <div id="example-modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Título del Modal</h5>
                        <button type="button" class="btn-close modal-close" aria-label="Cerrar">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Este es un ejemplo de modal que muestra cómo utilizarlo en tu aplicación.</p>
                        <p>Puedes incluir cualquier contenido aquí: formularios, información, etc.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Guardar cambios</button>
                        <button type="button" class="btn btn-ghost modal-close">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Script para cambiar entre temas claro/oscuro
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            
            // Inicializar tema basado en preferencias
            const savedTheme = localStorage.getItem('ai-content-ui-theme');
            if (savedTheme) {
                document.documentElement.setAttribute('data-theme', savedTheme);
            } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
            
            // Toggle de tema
            themeToggle.addEventListener('click', function() {
                const currentTheme = document.documentElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                document.documentElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('ai-content-ui-theme', newTheme);
            });
            
            // Modal
            const modal = document.getElementById('example-modal');
            const openModalBtn = document.getElementById('open-modal');
            const closeModalBtns = document.querySelectorAll('.modal-close');
            
            openModalBtn.addEventListener('click', function() {
                modal.classList.add('show');
            });
            
            closeModalBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    modal.classList.remove('show');
                });
            });
            
            // Cerrar modal al hacer clic fuera
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
