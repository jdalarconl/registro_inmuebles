<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {

        return view('propietario.create', ['tipo' => 'No']);
    }

    public function store(Request $request)
    {

        $correo = $request->email;
        $user = Propietarios::where('email', '=', $correo)->first();

        if ($user === null) {
            $propietarionew = Propietarios::create($request->all());
            return redirect()->route('negocio.show', $propietarionew);
        } else {
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->phone = $request->phone;
            $user->paso = "datos";            
            $user->save();
            return redirect()->route('negocio.show', $user);
        }
    }

    public function edit(Propietarios $propietario)
    {

        return view('propietario.edit', compact('propietario'), ['tipo' => 'No']);
    }

    public function update(Request $request, Propietarios $propietario)
    {
        $propietario->name = $request->name;
        $propietario->lastname = $request->lastname;
        $propietario->phone = $request->phone;
        $propietario->save();
        return redirect()->route('negocio.show', $propietario);
    }
}
