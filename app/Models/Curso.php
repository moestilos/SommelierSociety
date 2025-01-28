<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion_breve',
        'descripcion',
        'contenidos',
        'modalidad',
        'duracion',
        'lugar',
        'coste',
        'idioma',
        'plazas_disponibles',
    ];
}
