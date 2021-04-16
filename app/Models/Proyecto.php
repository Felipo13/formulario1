<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{

    protected $fillable = ['nombre', 'paterno', 'materno', 'correo', 'carrera'];

    use HasFactory;
    protected $table = 'projects';
}
