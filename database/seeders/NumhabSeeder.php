<?php

namespace Database\Seeders;

use App\Models\Num_habitaciones;
use Illuminate\Database\Seeder;

class NumhabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cantidades = range(1, 4);
        foreach ($cantidades as $valor) {
            $habitaciones = new Num_habitaciones();
            $habitaciones->num_habitaciones = $valor;
            $habitaciones->save();
        }
        $habitaciones5 = new Num_habitaciones();
        $habitaciones5->num_habitaciones = "5+";
        $habitaciones5->save();
    }
}
