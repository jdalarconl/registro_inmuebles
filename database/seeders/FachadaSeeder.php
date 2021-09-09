<?php

namespace Database\Seeders;

use App\Models\Materiales_fachada;
use Illuminate\Database\Seeder;

class FachadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fachada = new Materiales_fachada();
        $fachada->desc_mats_fachada = "Otro";
        $fachada->save();

        $fachada2 = new Materiales_fachada();
        $fachada2->desc_mats_fachada = "Ladrillo a la vista";
        $fachada2->save();

        $fachada3 = new Materiales_fachada();
        $fachada3->desc_mats_fachada = "Pañete";
        $fachada3->save();        
    }
}
