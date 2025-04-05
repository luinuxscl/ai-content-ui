<?php

namespace Luinuxscl\AiContentUi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    /**
     * Mostrar la página principal de componentes
     */
    public function index()
    {
        return view('ai-content-ui::examples.index');
    }

    /**
     * Mostrar ejemplos de componentes específicos
     */
    public function show($component)
    {
        try {
            // Registrar el componente solicitado para depuración
            Log::info('Componente solicitado: ' . $component);
            
            // Verificar si existe el archivo de vista del componente
            $viewPath = 'ai-content-ui::examples.components.' . $component;
            
            return view('ai-content-ui::examples.index', ['componentName' => $component]);
        } catch (\Exception $e) {
            Log::error('Error al mostrar el componente: ' . $e->getMessage());
            return redirect()->route('ai-content-ui.index')->with('error', 'No se pudo cargar el componente solicitado.');
        }
    }
}
