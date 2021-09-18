<?php

namespace Database\Seeders;

use App\Models\Estratos;
use Illuminate\Database\Seeder;

class EstratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantidades = range(1, 6);
        foreach ($cantidades as $valor) {
            $estrato = new Estratos();
            $estrato->estrato = $valor;
            $estrato->save();
        }
    }
}
