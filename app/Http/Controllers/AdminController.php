<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cata; 
use App\Models\Curso;
use App\Models\ReservaCurso;
use App\Models\Reserva; 

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

    public function showPersonasForm()
    {
        $cursos = Curso::all();
        $catas = Cata::all();
        return view('personas', compact('cursos', 'catas'));
    }

    public function listPersonas(Request $request)
    {
        $tipo = $request->input('tipo');
        $id = $request->input('id');

        if ($tipo == 'curso') {
            $reservas = ReservaCurso::where('curso_id', $id)->get();
        } else {
            $reservas = Reserva::where('cata_id', $id)->get();
        }

        $cursos = Curso::all();
        $catas = Cata::all();

        return view('personas', compact('reservas', 'tipo', 'cursos', 'catas'));
    }
}
