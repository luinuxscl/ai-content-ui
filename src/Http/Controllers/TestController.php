<?php

namespace Luinuxscl\AiContentUi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    /**
     * Muestra la página de prueba de componentes básicos
     */
    public function index()
    {
        return view('ai-content-ui::test');
    }
    
    /**
     * Muestra la página de prueba de componentes de formulario
     */
    public function forms()
    {
        return view('ai-content-ui::test-forms');
    }
}
