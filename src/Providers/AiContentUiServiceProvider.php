<?php

namespace Luinuxscl\AiContentUi\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Compilers\BladeCompiler;

class AiContentUiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/ai-content-ui.php',
            'ai-content-ui'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publicar configuración
        $this->publishes([
            __DIR__ . '/../../config/ai-content-ui.php' => config_path('ai-content-ui.php'),
        ], 'ai-content-ui-config');

        // Publicar assets
        $this->publishes([
            __DIR__ . '/../../resources/css' => public_path('vendor/ai-content-ui/css'),
            __DIR__ . '/../../resources/js' => public_path('vendor/ai-content-ui/js'),
        ], 'ai-content-ui-assets');

        // Publicar assets para Vite (nuevo)
        $this->publishes([
            __DIR__ . '/../../resources/css' => resource_path('css/vendor/ai-content-ui'),
            __DIR__ . '/../../resources/js' => resource_path('js/vendor/ai-content-ui'),
        ], 'ai-content-ui-vite-assets');

        // Publicar vistas
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/ai-content-ui'),
        ], 'ai-content-ui-views');

        // Cargar vistas
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ai-content-ui');
        
        // Cargar componentes (ambos namespaces para compatibilidad)
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/components', 'ai-content-ui-components');

        // Registrar componentes Blade
        $this->registerComponents();

        // Cargar rutas de prueba si estamos en entorno de desarrollo
        if ($this->app->environment('local')) {
            $this->registerTestRoutes();
        }
    }

    /**
     * Registrar componentes Blade.
     */
    private function registerComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            // Componentes básicos (Fase 1)
            $blade->component('ai-content-ui::components.button', 'ui-button');
            $blade->component('ai-content-ui::components.card', 'ui-card');
            $blade->component('ai-content-ui::components.alert', 'ui-alert');
            $blade->component('ai-content-ui::components.badge', 'ui-badge');
            $blade->component('ai-content-ui::components.modal', 'ui-modal');
            $blade->component('ai-content-ui::components.dropdown', 'ui-dropdown');
            
            // Tema claro/oscuro
            $blade->component('ai-content-ui::components.dark-mode-toggle', 'ui-dark-mode-toggle');
        });
    }

    /**
     * Registrar rutas para pruebas y desarrollo.
     */
    private function registerTestRoutes(): void
    {
        Route::middleware('web')
            ->prefix('ai-content-ui')
            ->namespace('Luinuxscl\\AiContentUi\\Http\\Controllers')
            ->group(function () {
                Route::get('/', 'TestController@index')->name('ai-content-ui.index');
                Route::get('/component/{component}', 'TestController@show')->name('ai-content-ui.show');
            });
    }
}
