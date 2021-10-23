<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Propietarios;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function edit()
    {
        $propietarios = Propietarios::all();
        
        return view('admin.edit', compact('propietarios'));
    }
}
