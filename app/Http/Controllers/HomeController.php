<?php

namespace App\Http\Controllers;

use App\Models\Propietarios;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $tipo = 2;
        return view('propietario', ['tipo' => $tipo]);
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
            $user->save();
            return redirect()->route('negocio.show', $user);
        }
    }
}
