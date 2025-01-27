<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cata;

class ReservaController extends Controller
{
    public function showForm($id)
    {
        $cata = Cata::findOrFail($id);
        return view('reservar', compact('cata'));
    }

    public function submitForm(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email' => 'required|email',
            'confirm_email' => 'required|same:email',
        ]);

        // Lógica para manejar la reserva

        return redirect()->route('catas.index')->with('success', 'Reserva realizada correctamente.');
    }
}
