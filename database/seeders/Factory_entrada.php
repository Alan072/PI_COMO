<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Factory_entrada extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index){
            DB::table('producto')->insert([
                'nombre'=>$faker->randomElement(),
                'descripcion'=>$faker->randomElement(),]);
        }
    }
}
#investigar de random text dentro de la descripcion