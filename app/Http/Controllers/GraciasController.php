<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedades;
use App\Models\Negocios;

class GraciasController extends Controller
{
    public function show($id)
    {
        $Propiedad = Propiedades::find($id);
        $tipo_inm =  $Propiedad->tipo_inmueble;

        $negocio = Negocios::where('propiedad', $id)->first();
        $cpvj = $negocio->cpvj;

        if ($cpvj == "Si") {
            $cpvj_bool = true;
        } else if ($cpvj == "No") {
            $cpvj_bool = false;
        }

        return view('gracias', ['cpvj' => $cpvj_bool], ['tipo' => $tipo_inm]);
    }
}
