<?php

namespace Database\Seeders;

use App\Models\Mats_piso_zsocial;
use Illuminate\Database\Seeder;

class MatPisoZsocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_zsocial();
        $material->desc_mats_piso_zsocial =  "Otro";
        $material->save();

        $material2 = new Mats_piso_zsocial();
        $material2->desc_mats_piso_zsocial = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_zsocial();
        $material3->desc_mats_piso_zsocial = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_zsocial();
        $material4->desc_mats_piso_zsocial = "Mármol";
        $material4->save();

        $material5 = new Mats_piso_zsocial();
        $material5->desc_mats_piso_zsocial = "Laminado";
        $material5->save();

        $material6 = new Mats_piso_zsocial();
        $material6->desc_mats_piso_zsocial = "Madera lacada";
        $material6->save();
    }
}
