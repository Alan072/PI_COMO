<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla tipo_usuario
class TipoUsuario extends Model
{
    protected $table = 'tipo_usuario';

    protected $fillable = [
        'nombre',
        'empresa',
        'direccion',
        'pais',
        'correo',
        'telefono_celular',
        'telefono_fijo',
        'rol_desempena',
    ];

    public function rolDesempena()
    {
        return $this->belongsTo('App\Models\RolDesempena');
    }

    public function salidas()
    {
        return $this->hasMany('App\Models\Salida');
    }

    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea');
    }
}
