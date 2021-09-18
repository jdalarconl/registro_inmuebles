<?php

namespace Database\Seeders;

use App\Models\Niveles;
use Illuminate\Database\Seeder;

class NivelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nivel = new Niveles();
        $nivel->des_nivel = "1";
        $nivel->save();

        $nivel2 = new Niveles();
        $nivel2->des_nivel = "2";
        $nivel2->save();

        $nivel3 = new Niveles();
        $nivel3->des_nivel = "3+";
        $nivel3->save();
    }
}
