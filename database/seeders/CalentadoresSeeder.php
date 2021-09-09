<?php

namespace Database\Seeders;

use App\Models\Calentadores;
use Illuminate\Database\Seeder;

class CalentadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $calentador = new Calentadores();
        $calentador->desc_tipos_calentador= "Gas natural de paso";
        $calentador->save();

        $calentador2 = new Calentadores();
        $calentador2->desc_tipos_calentador = "Gas natural caldera";
        $calentador2->save();

        $calentador3 = new Calentadores();
        $calentador3->desc_tipos_calentador = "Eléctrico de paso";
        $calentador3->save();

        $calentador4 = new Calentadores();
        $calentador4->desc_tipos_calentador = "No tiene";
        $calentador4->save();
    }
}
