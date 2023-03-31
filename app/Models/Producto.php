<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla producto
class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = [
        'nombre_producto',
        'descripcion',
    ];

    public function almacenProductos()
    {
        return $this->hasMany('App\Models\AlmacenProducto');
    }

    public function entradas()
    {
        return $this->hasMany('App\Models\Entrada');
    }

    public function salidas()
    {
        return $this->hasMany('App\Models\Salida');
    }
}
