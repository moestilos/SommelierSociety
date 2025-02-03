<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\Request;

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
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'review' => 'required|string',
                'stars' => 'required|integer|min:1|max:5',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('resenas', 'public');
            }

            $resena = Resena::create([
                'name' => $validated['name'],
                'review' => $validated['review'],
                'stars' => $validated['stars'],
                'image' => $imagePath,
                'likes' => 0,
            ]);
            
            // Renderizamos el partial y lo enviamos en la respuesta
            $html = view('partials.resena', compact('resena'))->render();

            return response()->json(['success' => true, 'html' => $html]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}