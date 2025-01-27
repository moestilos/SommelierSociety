<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'cata_id',
        'name',
        'age',
        'email',
    ];

    public function cata()
    {
        return $this->belongsTo(Cata::class);
    }
}
