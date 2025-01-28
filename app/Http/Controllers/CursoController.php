<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\ReservaCurso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('tarifas', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion_breve' => 'required|string',
            'descripcion' => 'required|string',
            'contenidos' => 'required|string',
            'modalidad' => 'required|string',
            'duracion' => 'required|integer',
            'lugar' => 'required|string',
            'coste' => 'required|numeric',
            'idioma' => 'required|string',
            'plazas_disponibles' => 'required|integer',
        ]);

        Curso::create($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso creado con éxito.');
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion_breve' => 'required|string',
            'descripcion' => 'required|string',
            'contenidos' => 'required|string',
            'modalidad' => 'required|string',
            'duracion' => 'required|integer',
            'lugar' => 'required|string',
            'coste' => 'required|numeric',
            'idioma' => 'required|string',
            'plazas_disponibles' => 'required|integer',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado con éxito.');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso eliminado correctamente.');
    }

    public function showReservationForm($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.reservar', compact('curso'));
    }

    public function submitReservation(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'age' => 'required|integer|min:18',
        ]);

        ReservaCurso::create([
            'curso_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
        ]);

        return redirect()->route('cursos.show', $id)->with('success', 'Reserva realizada con éxito.');
    }

    public function destroyReservation($id)
    {
        $reserva = ReservaCurso::findOrFail($id);
        $reserva->delete();

        return redirect()->back()->with('success', 'Reserva eliminada correctamente.');
    }

    public function listReservations($id)
    {
        $curso = Curso::findOrFail($id);
        $reservas = ReservaCurso::where('curso_id', $id)->get();
        return view('cursos.reservas', compact('curso', 'reservas'));
    }
}
