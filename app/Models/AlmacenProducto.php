<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modelo para la tabla almacen_producto
class AlmacenProducto extends Model
{
    protected $table = 'almacen_producto';

    protected $fillable = [
        'stock',
        'precio',
        'producto_id',
        'ubicacion_id',
    ];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }

    public function ubicacion()
    {
        return $this->belongsTo('App\Models\Ubicacion');
    }
}

