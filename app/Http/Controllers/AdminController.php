<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        // Lógica para manejar el envío del formulario

        return redirect()->route('admin.form')->with('success', 'Formulario enviado correctamente.');
    }
}
