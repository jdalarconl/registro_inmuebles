<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\No_garajes;
use App\Models\Mats_piso_habitacion;
use App\Models\Mats_piso_cocina;
use App\Models\Mats_piso_bano;
use App\Models\Mats_piso_zsocial;
use App\Models\Mb_cocina;
use App\Models\Tipos_estufa;
use App\Models\Tipos_horno;
use App\Models\Tipos_cocina;
use App\Models\Calentadores;
use App\Models\Vista;
use App\Models\Zonas_sociales;
use App\Models\Materiales_fachada;
use App\Models\Propiedades as Inmueble;

use Propiedades;

class DetallesController extends Controller
{
    public function show($id)
    {

        $garajes = No_garajes::pluck('desc_no_garajes', 'id');
        $mat_habitaciones = Mats_piso_habitacion::pluck('desc_mats_piso_habitaciones', 'id');
        $mat_cocina = Mats_piso_cocina::pluck('desc_mats_piso_cocina', 'id');
        $mat_bano = Mats_piso_bano::pluck('desc_mats_piso_bano', 'id');
        $mat_zsocial = Mats_piso_zsocial::pluck('desc_mats_piso_zsocial', 'id');
        $mb_cocina = Mb_cocina::pluck('desc_mbs_cocina', 'id');
        $estufa = Tipos_estufa::pluck('desc_tipos_estufa', 'id');
        $horno = Tipos_horno::pluck('desc_tipos_horno', 'id');
        $tipo_cocina = Tipos_cocina::pluck('desc_tipos_cocina', 'id');
        $calentador = Calentadores::pluck('desc_tipos_calentador', 'id');
        $vista = Vista::pluck('desc_vista', 'id');
        $zonas = Zonas_sociales::pluck('desc_zona_social', 'id');
        $mat_fachada = Materiales_fachada::pluck('desc_mats_fachada', 'id');

        $Propiedad = Inmueble::find($id);
        $tipo_inm =  $Propiedad->tipo_inmueble;

        return view(
            'detalles',
            compact(
                'garajes',
                'mat_habitaciones',
                'mat_cocina',
                'mat_bano',
                'mat_zsocial',
                'mb_cocina',
                'estufa',
                'horno',
                'tipo_cocina',
                'calentador',
                'vista',
                'zonas',
                'mat_fachada'
            ),
            ['tipo' => $tipo_inm]
        );
    }
    public function store(Request $request, $id)
    {
        $Propiedad = Inmueble::find($id);
        $Propiedad->a_construida = $request->a_construida;
        $Propiedad->a_privada = $request->a_privada;
        $Propiedad->a_terreno = $request->a_terreno;
        $Propiedad->niveles = $request->niveles;
        $Propiedad->n_hab = $request->n_hab;
        $Propiedad->banos = $request->no_banos;
        $Propiedad->no_garajes = $request->no_garajes;
        $Propiedad->mat_habitacion = $request->material_hab;
        $Propiedad->mat_piso_cocina = $request->mp_cocina;
        $Propiedad->mat_piso_bano = $request->mat_piso_bano;
        $Propiedad->mat_piso_zsocial = $request->mat_piso_zona_social;
        $Propiedad->mb_cocina = $request->mb_cocina;
        $Propiedad->tipo_estufa = $request->estufa;
        $Propiedad->tipo_horno = $request->horno;
        $Propiedad->tipo_cocina = $request->tp_cocina;
        $Propiedad->tipo_calentador = $request->calentador;
        $Propiedad->tipo_vista = $request->vista;
        $Propiedad->zona_social = $request->zona_social;
        $Propiedad->material_fachada = $request->material_fachada;

        // checks
        if ($request->terraza) {
            $Propiedad->terraza = "Si";
        } else {
            $Propiedad->terraza = "No";
        }

        if ($request->chimenea) {
            $Propiedad->chimenea = "Si";
        } else {
            $Propiedad->chimenea = "No";
        }

        if ($request->balcon) {
            $Propiedad->balcon = "Si";
        } else {
            $Propiedad->balcon = "No";
        }

        if ($request->b_servicio) {
            $Propiedad->b_servicio = "Si";
        } else {
            $Propiedad->b_servicio = "No";
        }

        if ($request->b_social) {
            $Propiedad->b_social = "Si";
        } else {
            $Propiedad->b_social = "No";
        }

        if ($request->estudio) {
            $Propiedad->estudio = "Si";
        } else {
            $Propiedad->estudio = "No";
        }

        if ($request->deposito) {
            $Propiedad->deposito = "Si";
        } else {
            $Propiedad->deposito = "No";
        }

        if ($request->hab_servicio) {
            $Propiedad->hab_servicio = "Si";
        } else {
            $Propiedad->hab_servicio = "No";
        }

        if ($request->star) {
            $Propiedad->star = "Si";
        } else {
            $Propiedad->star = "No";
        }

        if ($request->zona_lavanderia) {
            $Propiedad->zona_lavanderia = "Si";
        } else {
            $Propiedad->zona_lavanderia = "No";
        }

        if ($request->patio) {
            $Propiedad->patio = "Si";
        } else {
            $Propiedad->patio = "No";
        }

        if ($request->entrega_cortinas) {
            $Propiedad->entrega_cortinas = "Si";
        } else {
            $Propiedad->entrega_cortinas = "No";
        }

        if ($request->garaje_i) {
            $Propiedad->garaje_i = "Si";
        } else {
            $Propiedad->garaje_i = "No";
        }

        if ($request->garaje_c) {
            $Propiedad->garaje_c = "Si";
        } else {
            $Propiedad->garaje_c = "No";
        }

        $Propiedad->save();
        return redirect()->route('conjunto.show', $Propiedad);
    }
}
