<?php

namespace Database\Seeders;

use App\Models\Mats_piso_habitacion;
use Illuminate\Database\Seeder;

class MatPisoHabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_habitacion();
        $material->desc_mats_piso_habitaciones =  "Otro";
        $material->save();

        $material2 = new Mats_piso_habitacion();
        $material2->desc_mats_piso_habitaciones = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_habitacion();
        $material3->desc_mats_piso_habitaciones = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_habitacion();
        $material4->desc_mats_piso_habitaciones = "Mármol";
        $material4->save();

        $material5 = new Mats_piso_habitacion();
        $material5->desc_mats_piso_habitaciones = "Laminado";
        $material5->save();

        $material6 = new Mats_piso_habitacion();
        $material6->desc_mats_piso_habitaciones = "Madera lacada";
        $material6->save();
    }
}
