<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla salida
class Salida extends Model
{
    protected $table = 'salida';

    protected $fillable = [
        'producto_id',
        'usuario_id',
    ];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\TipoUsuario');
    }

    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea');
    }
}
