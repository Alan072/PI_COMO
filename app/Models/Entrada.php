<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla entrada
class Entrada extends Model
{
    protected $table = 'entrada';

    protected $fillable = [
        'producto_id',
    ];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }

    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea');
    }
}