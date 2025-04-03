# Laravel AI Content UI

Componentes UI/UX reutilizables y sistema de diseño unificado para Laravel AI Content Platform. Este paquete proporciona un conjunto completo de componentes visualmente coherentes basados en Tailwind CSS y DaisyUI con soporte para temas claro/oscuro.

## Características

### Implementado (Fase 1: Estructura Base)

- ✅ Sistema de componentes Blade reutilizables
- ✅ Soporte para temas claro/oscuro con cambio automático y preferencias del usuario
- ✅ Componentes básicos implementados:
  - Button: Botones con variantes, tamaños y soporte para iconos
  - Card: Tarjetas con cabecera, cuerpo y pie opcionales
  - Alert: Alertas con diferentes variantes, iconos y cierre opcional
  - Badge: Insignias para etiquetas y contadores
  - Modal: Ventanas modales con cabecera, cuerpo y pie
  - Dropdown: Menús desplegables interactivos con Alpine.js

## Requisitos

- PHP 8.2 o superior
- Laravel 11.0 o superior
- Tailwind CSS
- Alpine.js

## Instalación

1. Instalar el paquete vía Composer:

```bash
composer require luinuxscl/ai-content-ui
```

2. Publicar los assets (opcional):

```bash
php artisan vendor:publish --tag=ai-content-ui-assets
```

3. Publicar la configuración (opcional):

```bash
php artisan vendor:publish --tag=ai-content-ui-config
```

4. Publicar las vistas (opcional):

```bash
php artisan vendor:publish --tag=ai-content-ui-views
```

## Uso Básico

Una vez instalado, puedes usar los componentes en tus vistas Blade:

```blade
<x-ui-button variant="btn-primary">Botón Primario</x-ui-button>

<x-ui-card>
    <x-slot name="header">Título de la Tarjeta</x-slot>
    Contenido de la tarjeta
    <x-slot name="footer">Pie de la tarjeta</x-slot>
</x-ui-card>

<x-ui-alert variant="alert-info" title="Información">
    Este es un mensaje informativo.
</x-ui-alert>
```

### Cambio de Tema

Puedes añadir un botón para cambiar entre temas claro y oscuro:

```blade
<button data-toggle-theme class="btn btn-ghost">
    <i class="fas fa-moon dark:hidden"></i>
    <i class="fas fa-sun hidden dark:inline"></i>
</button>
```

## Configuración

Puedes configurar el comportamiento del paquete en el archivo `config/ai-content-ui.php`:

```php
return [
    'theme' => [
        'default' => 'light',  // Tema predeterminado ('light' o 'dark')
        'allow_user_preference' => true,  // Permitir al usuario cambiar el tema
    ],
    
    'components' => [
        'enable_all' => true,
        'disabled' => [],  // Componentes específicos a deshabilitar
    ],
    
    'prefix' => 'ui',  // Prefijo para los componentes
    
    'assets' => [
        'auto_load' => true,  // Cargar automáticamente CSS y JS
    ],
];
```

## Roadmap

### Fase 1: Estructura Base ✅

- Sistema de componentes básicos
- Implementación de temas claro/oscuro
- Componentes básicos (Button, Card, Alert, etc.)

### Fase 2: Componentes de Formulario ⏳

- Inputs, Select, Textarea, Checkbox, Radio, etc.
- Validación y manejo de errores
- Componentes avanzados (DatePicker, ColorPicker)

### Fase 3: Componentes de Datos ⏳

- Tablas responsive
- Paginación
- Tarjetas de datos y estadísticas
- Estados vacíos y loading

### Fase 4: Layouts y Navegación ⏳

- AppLayout principal
- Navegación y menús
- Migas de pan y tabs
- Layout de dashboard y settings

### Fase 5: Documentación y Refinamiento ⏳

- Catálogo visual de componentes
- Guías de uso y ejemplos
- Optimización de rendimiento
- Testing de accesibilidad

## Licencia

Este paquete es software propietario y confidencial.
