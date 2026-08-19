<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Actividad extends Model
{
    // Laravel
    protected $table = 'actividades';

    // Campos permitidos para actividades
    protected $fillable = [
        'titulo',
        'materia',
        'completada',
    ];

    protected function casts(): array
    {
        return [
            'completada' => 'boolean',
        ];
    }
}
