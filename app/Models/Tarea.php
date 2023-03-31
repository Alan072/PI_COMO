<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla tarea
class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tarea';

    protected $fillable = ['descripcion', 'salida_id', 'ubicacion_id', 'entrada_id'];

    public function salida()
    {
        return $this->belongsTo(Salida::class);
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }

    public function entrada()
    {
        return $this->belongsTo(Entrada::class);
    }
}