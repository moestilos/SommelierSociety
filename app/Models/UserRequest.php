<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRequest extends Model
{
    use HasFactory;

    protected $table = 'user_requests';

    protected $fillable = ['name', 'email', 'phone', 'message'];
}
