<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotosController extends Controller
{
    public function show($id)
    {
        $Propiedad = Propiedades::find($id);
        $tipo_inm =  $Propiedad->tipo_inmueble;
        return view('fotos', ['tipo' => $tipo_inm], ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        if ($request->hasfile('fileCollection')) {
            foreach ($request->file('fileCollection') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/storage/fotos/' . $id . '/', $name);
                $data[] = $name;
            }
        }
        return redirect()->route('planes.show', $id);
    }

    public function saltar($id)
    {
        return redirect()->route('planes.show', $id);
    }
}
