<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cata;
use App\Models\Reserva;

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

        // Guardar la reserva en la base de datos
        Reserva::create([
            'cata_id' => $id,
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
        ]);

        return redirect()->route('catas.index')->with('success', 'Reserva realizada correctamente.');
    }

    public function list($id)
    {
        $cata = Cata::findOrFail($id);
        $reservas = Reserva::where('cata_id', $id)->get();

        return view('personasReserv', compact('cata', 'reservas'));
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();

        return redirect()->back()->with('success', 'Reserva eliminada correctamente.');
    }
}
