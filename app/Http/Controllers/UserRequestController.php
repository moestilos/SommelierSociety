<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRequest;


class UserRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_requests,email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Crear una nueva solicitud en la base de datos
        UserRequest::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Tu solicitud ha sido enviada con éxito.');
    }
}

