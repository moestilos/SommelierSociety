<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CataController extends Controller
{
    public function show($id)
    {
        $cata = [
            'id' => $id,
            'title' => 'Cata de Vinos',
            'description' => 'Descripción de la cata de vinos.',
            'location' => 'Bodega La Rioja',
            'date' => '2025-02-05'
        ];

        return view('cata.show', compact('cata'));
    }
}
