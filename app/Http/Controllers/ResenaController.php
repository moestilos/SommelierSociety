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
        ]);

        Resena::create([
            'name' => $request->name,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Reseña enviada con éxito.');
    }
}
