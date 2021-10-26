<?php

namespace Database\Seeders;
use App\Models\Usuarios;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuarios = new Usuarios();
        $usuarios->usuario = "amontero";
        $usuarios->save();

        $usuarios2 = new Usuarios();
        $usuarios2->usuario = "bmoreno";
        $usuarios2->save();
    }
}
