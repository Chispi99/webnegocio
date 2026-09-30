<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Muestra la página principal de la aplicación.
     */
    public function index(): View
    {
        return view('pages.home');
    }
}
