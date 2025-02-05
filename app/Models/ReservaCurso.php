<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaCurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'name',
        'email',
        'age',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
