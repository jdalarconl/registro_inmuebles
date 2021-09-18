<?php

namespace Database\Seeders;

use App\Models\Num_banos;
use Illuminate\Database\Seeder;

class NumbanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bano = new Num_banos();
        $bano->num_banos = "1";
        $bano->save();

        $bano2 = new Num_banos();
        $bano2->num_banos = "2";
        $bano2->save();

        $bano3 = new Num_banos();
        $bano3->num_banos = "3";
        $bano3->save();

        $bano4 = new Num_banos();
        $bano4->num_banos = "4+";
        $bano4->save();
    }
}
