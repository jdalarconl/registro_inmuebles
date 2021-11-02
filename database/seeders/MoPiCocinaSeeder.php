<?php

namespace Database\Seeders;

use App\Models\Mats_piso_cocina;
use Illuminate\Database\Seeder;

class MoPiCocinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_cocina();
        $material->desc_mats_piso_cocina =  "Otro";
        $material->save();

        $material2 = new Mats_piso_cocina();
        $material2->desc_mats_piso_cocina = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_cocina();
        $material3->desc_mats_piso_cocina = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_cocina();
        $material4->desc_mats_piso_cocina = "Mármol";
        $material4->save();

        $material5 = new Mats_piso_cocina();
        $material5->desc_mats_piso_cocina = "Laminado";
        $material5->save();
    }
}
