<?php

namespace Database\Seeders;

use App\Models\No_garajes;
use Illuminate\Database\Seeder;

class NoGarajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $garajes = new No_garajes();
        $garajes->desc_no_garajes =  "Comunal";
        $garajes->save();

        $garajes2 = new No_garajes();
        $garajes2->desc_no_garajes = "No tiene";
        $garajes2->save();

        $garajes3 = new No_garajes();
        $garajes3->desc_no_garajes = "1";
        $garajes3->save();

        $garajes4 = new No_garajes();
        $garajes4->desc_no_garajes = "2";
        $garajes4->save();

        $garajes5 = new No_garajes();
        $garajes5->desc_no_garajes = "3";
        $garajes5->save();

        $garajes6 = new No_garajes();
        $garajes6->desc_no_garajes = "4+";
        $garajes6->save();
    }
}
