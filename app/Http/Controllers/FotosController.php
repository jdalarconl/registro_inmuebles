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
        return view('fotos', ['tipo' => $Propiedad->horizontal], ['id' => $id]);
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
