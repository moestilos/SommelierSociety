<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;

    protected $table = 'resenas';
    
    protected $fillable = [
        'name',
        'review',
        'stars',
        'image',
        'likes',
    ];

    protected $casts = [
        'stars' => 'integer',
        'likes' => 'integer',
    ];
}
