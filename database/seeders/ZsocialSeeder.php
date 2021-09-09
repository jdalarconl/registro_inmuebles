<?php

namespace Database\Seeders;

use App\Models\Zonas_sociales;
use Illuminate\Database\Seeder;

class ZsocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $zona = new Zonas_sociales();
        $zona->desc_zona_social =  "Salacomedor";
        $zona->save();

        $zona2 = new Zonas_sociales();
        $zona2->desc_zona_social = "Sala y comedor independientes";
        $zona2->save();
    }

}
