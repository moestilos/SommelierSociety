<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Obtener todos los cursos
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id); // Obtener curso por ID
        return view('courses.show', compact('course'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'total_hours' => 'required|integer',
        'max_students' => 'required|integer',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validación de la imagen
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('courses', 'public'); // Guardar la imagen en storage/app/public/courses
        $validated['image'] = $path;
    }

    Course::create($validated);

    return redirect()->route('courses.index')->with('success', 'Curso creado correctamente.');
}
}
