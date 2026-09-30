<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Muestra la página de menú y productos.
     */
    public function index(): View
    {
        return view('pages.menu');
    }
}
