<?php

namespace Database\Seeders;

use App\Models\Tipos_cuotas;
use Illuminate\Database\Seeder;

class TiposCuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cuota = new Tipos_cuotas();
        $cuota->desc_tipo_cuota = "Única";
        $cuota->save();

        $cuota2 = new Tipos_cuotas();
        $cuota2->desc_tipo_cuota = "Plena / Pronto pago";
        $cuota2->save();
        
    }
}
