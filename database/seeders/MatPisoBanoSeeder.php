<?php

namespace Database\Seeders;

use App\Models\Mats_piso_bano;
use Illuminate\Database\Seeder;

class MatPisoBanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new Mats_piso_bano();
        $material->desc_mats_piso_bano =  "Otro";
        $material->save();

        $material2 = new Mats_piso_bano();
        $material2->desc_mats_piso_bano = "Cerámica";
        $material2->save();

        $material3 = new Mats_piso_bano();
        $material3->desc_mats_piso_bano = "Porcelanato";
        $material3->save();

        $material4 = new Mats_piso_bano();
        $material4->desc_mats_piso_bano = "Mármol";
        $material4->save();
    }
}
