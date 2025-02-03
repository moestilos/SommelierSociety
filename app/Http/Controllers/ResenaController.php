<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ResenaController extends Controller
{
    // Mostrar todas las reseñas
    public function index()
    {
        $resenas = Resena::orderBy('created_at', 'desc')->get();
        return view('resenas', compact('resenas'));
    }

    // Guardar una nueva reseña
    public function store(Request $request)
    {
        // Validar datos
        $data = $request->validate([
            'name'   => 'required|string|max:255',
            'review' => 'required|string',
            'stars'  => 'required|integer|min:1|max:5',
            'image'  => 'nullable|image'
        ]);

        // Guardar la reseña y la imagen, si corresponde
        $resena = Resena::create($data);

        // Renderizar la vista parcial en una cadena
        $html = view('partials.resena', compact('resena'))->render();

        // Retornar respuesta JSON
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }

    // Mostrar el formulario de edición de una reseña
    public function edit($id)
    {
        $resena = Resena::findOrFail($id);
        return view('resenas_edit', compact('resena'));
    }

    // Actualizar una reseña existente
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'review' => 'required|string',
                'stars' => 'required|integer|min:1|max:5',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $resena = Resena::findOrFail($id);

            if ($request->hasFile('image')) {
                // Eliminar la imagen anterior si existe
                if ($resena->image) {
                    Storage::disk('public')->delete($resena->image);
                }
                $imagePath = $request->file('image')->store('resenas', 'public');
                $resena->image = $imagePath;
            }

            $resena->update([
                'name' => $validated['name'],
                'review' => $validated['review'],
                'stars' => $validated['stars'],
            ]);

            return redirect()->route('resenas.index')->with('success', 'Reseña actualizada correctamente.');
        } catch (\Exception $e) {
            Log::error('Error al actualizar la reseña: ' . $e->getMessage());
            return redirect()->route('resenas.index')->with('error', 'Error al actualizar la reseña: ' . $e->getMessage());
        }
    }

    // Eliminar una reseña
    public function destroy($id)
    {
        try {
            $resena = Resena::findOrFail($id);
            if ($resena->image) {
                Storage::disk('public')->delete($resena->image);
            }
            $resena->delete();

            return redirect()->route('resenas.index')->with('success', 'Reseña eliminada correctamente.');
        } catch (\Exception $e) {
            Log::error('Error al eliminar la reseña: ' . $e->getMessage());
            return redirect()->route('resenas.index')->with('error', 'Error al eliminar la reseña: ' . $e->getMessage());
        }
    }
}