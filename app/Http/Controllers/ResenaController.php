<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use Illuminate\Support\Facades\Storage;

class ResenaController extends Controller
{
    public function index()
    {
        $resenas = Resena::all();
        return view('resenas', compact('resenas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar imagen
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('resenas', 'public');
        }

        Resena::create([
            'name' => $request->name,
            'review' => $request->review,
            'stars' => $request->stars, // Asegurarse de incluir 'stars'
            'image' => $imagePath, // Guardar ruta de la imagen
        ]);

        return redirect()->back()->with('success', 'Reseña enviada con éxito.');
    }

    public function edit($id)
    {
        $resena = Resena::findOrFail($id);
        return view('resenas_edit', compact('resena'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar imagen
        ]);

        $resena = Resena::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($resena->image) {
                Storage::disk('public')->delete($resena->image);
            }
            $imagePath = $request->file('image')->store('resenas', 'public');
            $resena->image = $imagePath;
        }

        $resena->update([
            'name' => $request->name,
            'review' => $request->review,
            'stars' => $request->stars, // Asegurarse de incluir 'stars'
        ]);

        return redirect()->route('resenas.index')->with('success', 'Reseña actualizada con éxito.');
    }
}
