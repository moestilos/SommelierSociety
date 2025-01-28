<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
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
}
