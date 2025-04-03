<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configuración de Temas
    |--------------------------------------------------------------------------
    |
    | Configura el tema predeterminado y opciones para la UI
    |
    */
    'theme' => [
        'default' => 'light',  // 'light' o 'dark'
        'allow_user_preference' => true,  // Permitir que los usuarios cambien entre temas
        'custom_themes' => [
            // Definir temas personalizados aquí
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Configuración de Componentes
    |--------------------------------------------------------------------------
    |
    | Habilitar/deshabilitar componentes específicos
    |
    */
    'components' => [
        'enable_all' => true,
        'disabled' => [
            // Lista de componentes para deshabilitar específicamente
            // Ejemplo: 'button', 'alert', etc.
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Configuración de Prefijos
    |--------------------------------------------------------------------------
    |
    | Prefijos para evitar conflictos con otros componentes
    |
    */
    'prefix' => 'ui',  // Los componentes se registrarán como 'ui-button', 'ui-card', etc.
    
    /*
    |--------------------------------------------------------------------------
    | Configuración de Assets
    |--------------------------------------------------------------------------
    |
    | Configuración para la carga de CSS y JS
    |
    */
    'assets' => [
        'auto_load' => true,  // Cargar automáticamente CSS y JS
        'minify' => true,     // Usar versiones minificadas en producción
    ],
];