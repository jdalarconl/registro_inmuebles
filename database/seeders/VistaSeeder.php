<?php

namespace Database\Seeders;

use App\Models\Vista;
use Illuminate\Database\Seeder;

class VistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vista = new Vista();
        $vista->desc_vista = "Exterior";
        $vista->save();

        $vista2 = new Vista();
        $vista2->desc_vista = "Interior";
        $vista2->save();
    }
}
