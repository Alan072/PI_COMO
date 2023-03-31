<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Ubicacion;
use App\Models\RolDesempena;
use App\Models\Producto;
use App\Models\AlmacenProducto;
use App\Models\Entrada;
use App\Models\TipoUsuario;
use App\Models\Salida;
use App\Models\Tarea;

class consulta extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Tabla Ubicacion
        foreach (range(1, 10) as $index) {
            Ubicacion::create([
                'pasillo' => $faker->word,
                'racks' => $faker->numberBetween(1, 10),
            ]);
        }

        // Tabla RolDesempena
        foreach (range(1, 5) as $index) {
            RolDesempena::create([
                'nombre_rol' => $faker->word,
            ]);
        }

        // Tabla Producto
        foreach (range(1, 20) as $index) {
            Producto::create([
                'nombre_producto' => $faker->sentence(2),
                'descripcion' => $faker->paragraph(2),
            ]);
        }

        // Tabla AlmacenProducto
        foreach (range(1, 50) as $index) {
            AlmacenProducto::create([
                'stock' => $faker->numberBetween(1, 100),
                'precio' => $faker->randomFloat(2, 1, 1000),
                'producto_id' => $faker->numberBetween(1, 20),
                'ubicacion_id' => $faker->numberBetween(1, 10),
            ]);
        }

        // Tabla Entrada
        foreach (range(1, 30) as $index) {
            Entrada::create([
                'producto_id' => $faker->numberBetween(1, 20),
            ]);
        }

        // Tabla TipoUsuario
        foreach (range(1, 10) as $index) {
            TipoUsuario::create([
                'nombre' => $faker->name,
                'empresa' => $faker->company,
                'direccion' => $faker->address,
                'pais' => $faker->country,
                'correo' => $faker->email,
                'telefono_celular' => $faker->phoneNumber,
                'telefono_fijo' => $faker->phoneNumber,
                'rol_desempena' => $faker->numberBetween(1, 5),
            ]);
        }

        // Tabla Salida
        foreach (range(1, 20) as $index) {
            Salida::create([
                'producto_id' => $faker->numberBetween(1, 20),
                'usuario_id' => $faker->numberBetween(1, 10),
            ]);
        }

        // Tabla Tarea
        foreach (range(1, 15) as $index) {
            Tarea::create([
                'descripcion' => $faker->sentence(4),
                'salida_id' => $faker->numberBetween(1, 20),
                'ubicacion_id' => $faker->numberBetween(1, 10),
                'entrada_id' => $faker->numberBetween(1, 30),
            ]);
        }
    }
}

