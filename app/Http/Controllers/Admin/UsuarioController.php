<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function show()
    {
        return view('admin.login');
    }

    public function validar(Request $request)
    {
        return view('admin.main');
    }
}
