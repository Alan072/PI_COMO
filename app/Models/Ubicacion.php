<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla ubicacion
class Ubicacion extends Model
{
    protected $table = 'ubicacion';

    protected $fillable = [
        'pasillo',
        'racks',
    ];

    public function almacenProductos()
    {
        return $this->hasMany('App\Models\AlmacenProducto');
    }

    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea');
    }
}