<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;

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
        ]);

        Resena::create([
            'name' => $request->name,
            'review' => $request->review,
            'stars' => $request->stars, 
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
        ]);

        $resena = Resena::findOrFail($id);
        $resena->update([
            'name' => $request->name,
            'review' => $request->review,
            'stars' => $request->stars, 
        ]);

        return redirect()->route('resenas.index')->with('success', 'Reseña actualizada con éxito.');
    }
}
