<?php

namespace Database\Seeders;

use App\Models\Tipos_cocina;
use Illuminate\Database\Seeder;

class TpCocinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipos = new Tipos_cocina();
        $tipos->desc_tipos_cocina =  "Abierta";
        $tipos->save();

        $tipos2 = new Tipos_cocina();
        $tipos2->desc_tipos_cocina = "Cerrada";
        $tipos2->save();

        
    }
}
