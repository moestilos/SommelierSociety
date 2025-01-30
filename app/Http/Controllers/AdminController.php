<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cata; // Importar el modelo Cata

class AdminController extends Controller
{
    public function showForm()
    {
        return view('form'); // Corregir la vista a 'form'
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:cata,curso',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Crear una nueva cata en la base de datos
        Cata::create([
            'title' => $request->name,
            'type' => $request->type,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.form')->with('success', 'Formulario enviado correctamente.');
    }
}
