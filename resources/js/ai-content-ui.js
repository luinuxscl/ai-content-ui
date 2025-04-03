/**
 * Laravel AI Content UI - JavaScript Principal
 * 
 * Este archivo contiene las funcionalidades JS necesarias para los componentes del sistema de UI.
 * Se integra con Alpine.js para interactividad.
 */

// Utilidades para manejo de temas
const ThemeManager = {
    init() {
        this.setThemeBasedOnPreference();
        this.setupThemeToggle();
    },
    
    // Establece el tema basado en preferencias guardadas o predeterminadas
    setThemeBasedOnPreference() {
        const savedTheme = localStorage.getItem('ai-content-ui-theme');
        
        if (savedTheme) {
            this.setTheme(savedTheme);
        } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            this.setTheme('dark');
        } else {
            this.setTheme('light');
        }
    },
    
    // Cambia entre temas claro/oscuro
    toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        this.setTheme(newTheme);
    },
    
    // Establece un tema específico
    setTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('ai-content-ui-theme', theme);
        
        // Dispara un evento para que otros componentes puedan reaccionar
        window.dispatchEvent(new CustomEvent('themeChanged', { 
            detail: { theme } 
        }));
    },
    
    // Configura los elementos de cambio de tema en la página
    setupThemeToggle() {
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggles = document.querySelectorAll('[data-toggle-theme]');
            
            themeToggles.forEach(toggle => {
                toggle.addEventListener('click', () => this.toggleTheme());
            });
        });
    }
};

// Modal Manager
const ModalManager = {
    show(modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;
        
        modal.classList.add('show');
        document.body.classList.add('modal-open');
    },
    
    hide(modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;
        
        modal.classList.remove('show');
        document.body.classList.remove('modal-open');
    },
    
    init() {
        document.addEventListener('DOMContentLoaded', () => {
            // Inicializar todos los botones de abrir modal
            document.querySelectorAll('[data-bs-toggle="modal"]').forEach(btn => {
                const targetId = btn.getAttribute('data-bs-target');
                if (!targetId) return;
                
                btn.addEventListener('click', () => this.show(targetId.replace('#', '')));
            });
            
            // Inicializar todos los botones de cerrar modal
            document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(btn => {
                const modal = btn.closest('.modal');
                if (!modal) return;
                
                btn.addEventListener('click', () => this.hide(modal.id));
            });
        });
    }
};

// Componente Dropdown
function dropdown() {
    return {
        open: false,
        toggle() {
            this.open = !this.open;
        },
        close() {
            this.open = false;
        }
    };
}

// Componente Alert
function alert() {
    return {
        show: true,
        close() {
            this.show = false;
        }
    };
}

// Inicializar componentes
document.addEventListener('DOMContentLoaded', function() {
    // Iniciar el gestor de temas
    ThemeManager.init();
    
    // Iniciar el gestor de modales
    ModalManager.init();
    
    // Integración Alpine.js
    if (window.Alpine) {
        window.Alpine.data('dropdown', dropdown);
        window.Alpine.data('alert', alert);
    }
});

// Exportar para uso en otros módulos si es necesario
window.AiContentUi = {
    ThemeManager,
    ModalManager
};
