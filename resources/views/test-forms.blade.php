<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Formularios - AI Content UI</title>
    <!-- Tailwind CSS y DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Estilos propios -->
    <style>
        /* Estilos básicos de formulario */
        .form-control {
            @apply mb-4;
        }
        
        .label {
            @apply block mb-1;
        }
        
        .label-text {
            @apply font-medium text-sm;
        }
        
        .label-text-alt {
            @apply text-xs text-gray-500;
        }
        
        .input, .select, .textarea {
            @apply w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                  focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary;
        }
        
        .input-error, .select-error, .textarea-error {
            @apply border-error focus:border-error focus:ring-error;
        }
        
        .checkbox, .radio {
            @apply rounded border-gray-300 text-primary focus:ring-primary;
        }
    </style>
</head>
<body class="bg-base-200 p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-base-content">Test de Componentes de Formulario</h1>
            <button id="theme-toggle" class="btn btn-ghost">
                <i class="fas fa-moon dark:hidden"></i>
                <i class="fas fa-sun hidden dark:inline"></i>
            </button>
        </header>

        <div class="card bg-base-100 shadow-lg mb-8">
            <div class="card-body">
                <h2 class="text-xl font-semibold mb-4">Formulario de Ejemplo</h2>
                
                <form>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" class="input" placeholder="Ingresa tu nombre">
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" class="input" placeholder="correo@ejemplo.com">
                        <label class="label">
                            <span class="label-text-alt">Este correo se usará para las notificaciones</span>
                        </label>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Contraseña</span>
                        </label>
                        <input type="password" class="input">
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">País</span>
                        </label>
                        <select class="select">
                            <option disabled selected>Selecciona un país</option>
                            <option>Chile</option>
                            <option>Argentina</option>
                            <option>México</option>
                            <option>Colombia</option>
                            <option>España</option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Mensaje</span>
                        </label>
                        <textarea class="textarea h-24" placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                    
                    <div class="form-control">
                        <label class="cursor-pointer label justify-start gap-2">
                            <input type="checkbox" class="checkbox">
                            <span class="label-text">Acepto los términos y condiciones</span>
                        </label>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Suscripción</span>
                            </label>
                            <div class="space-y-2">
                                <label class="cursor-pointer label justify-start gap-2">
                                    <input type="radio" name="subscription" class="radio" checked>
                                    <span class="label-text">Mensual</span>
                                </label>
                                <label class="cursor-pointer label justify-start gap-2">
                                    <input type="radio" name="subscription" class="radio">
                                    <span class="label-text">Anual</span>
                                </label>
                                <label class="cursor-pointer label justify-start gap-2">
                                    <input type="radio" name="subscription" class="radio">
                                    <span class="label-text">Vitalicio</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Rango</span>
                            </label>
                            <input type="range" min="0" max="100" class="range range-primary" value="40">
                            <div class="flex justify-between text-xs mt-1">
                                <span>0</span>
                                <span>50</span>
                                <span>100</span>
                            </div>
                        </div>
                        
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Fecha</span>
                            </label>
                            <input type="date" class="input">
                        </div>
                    </div>
                    
                    <div class="flex justify-end gap-2 mt-6">
                        <button type="reset" class="btn btn-ghost">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="card bg-base-100 shadow-lg">
            <div class="card-body">
                <h2 class="text-xl font-semibold mb-4">Ejemplos de Estados</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-medium mb-3">Estado Normal</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Nombre de usuario</span>
                            </label>
                            <input type="text" class="input" value="usuario123">
                        </div>
                        
                        <h3 class="font-medium mb-3 mt-6">Estado con Error</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="text" class="input input-error" value="correo-invalido">
                            <label class="label">
                                <span class="label-text-alt text-error">Ingresa un correo electrónico válido.</span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="font-medium mb-3">Estado Deshabilitado</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Código de referencia</span>
                            </label>
                            <input type="text" class="input" value="REF-2025-04-03" disabled>
                            <label class="label">
                                <span class="label-text-alt">Este campo no puede modificarse</span>
                            </label>
                        </div>
                        
                        <h3 class="font-medium mb-3 mt-6">Estado de Éxito</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Código de verificación</span>
                            </label>
                            <div class="relative">
                                <input type="text" class="input border-success pr-10" value="123456">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-success">
                                    <i class="fas fa-check-circle"></i>
                                </span>
                            </div>
                            <label class="label">
                                <span class="label-text-alt text-success">Código verificado correctamente</span>
                            </label>
                        </div>
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
        });
    </script>
</body>
</html>
