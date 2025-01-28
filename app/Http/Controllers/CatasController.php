<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cata;

class CatasController extends Controller
{
    public function show($id)
    {
        $cata = Cata::findOrFail($id);

        return view('infoCatas', compact('cata'));
    }

    public function index()
    {
        $catas = Cata::all();

        return view('catasdevino', compact('catas'));
    }
}
