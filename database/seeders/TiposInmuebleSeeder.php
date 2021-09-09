<?php

namespace Database\Seeders;

use App\Models\Tipos_inmueble;
use Illuminate\Database\Seeder;

class TiposInmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo = new Tipos_inmueble();
        $tipo->desc_tipo_inmueble =  "Casa uso vivienda";
        $tipo->save();

        $tipo2 = new Tipos_inmueble();
        $tipo2->desc_tipo_inmueble = "Apartamento";
        $tipo2->save();
    }
}
