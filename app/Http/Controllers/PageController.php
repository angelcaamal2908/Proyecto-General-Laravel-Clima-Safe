<?php
// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($page)
    {
        // Opcional: Validar que la página exista
        $allowedPages = ['index', 'ui-elements', 'tables', 'forms'];
        if (!in_array($page, $allowedPages)) {
            abort(404); // Página no encontrada
        }

        // Retorna la vista que coincide con la página solicitada
        return view($page);
    }
}
