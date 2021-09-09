<?php

namespace Database\Seeders;

use App\Models\Remodelados;
use Illuminate\Database\Seeder;

class RemodeladoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Remodelado = new Remodelados();
        $Remodelado->desc_remodelado= "Total";
        $Remodelado->save();

        $Remodelado2 = new Remodelados();
        $Remodelado2->desc_remodelado = "Parcial";
        $Remodelado2->save();

        $Remodelado3 = new Remodelados();
        $Remodelado3->desc_remodelado = "No";
        $Remodelado3->save();  
    }
}
