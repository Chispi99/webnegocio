<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Muestra la página de contacto.
     */
    public function index(): View
    {
        return view('pages.contact');
    }

    /**
     * Procesa el formulario de contacto.
     */
    public function submit(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Simulación de envío de correo o guardado en base de datos.
        return redirect()->route('contact')->with('success', '¡Gracias por contactarnos! Hemos recibido tu mensaje y te responderemos pronto.');
    }
}
