<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla rol_desempena
class RolDesempena extends Model
{
    protected $table = 'rol_desempena';

    protected $fillable = [
        'nombre_rol',
    ];

    public function tipoUsuarios()
    {
        return $this->hasMany('App\Models\TipoUsuario');
    }
}