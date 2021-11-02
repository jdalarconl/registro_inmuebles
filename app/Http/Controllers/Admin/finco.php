<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class finco extends Controller
{
    //
    public function consulta()
    {
        $finco = HTTP::post('https://api.finco.co/query-apartment', [
            'test' => 'true',
            'APIKey' => '',
            'Tipo' => 'Apartment',
            'builtArea' => 150.8,
            'floor' => 5,
            'rooms' => 8,
            
        ]);
    }
}
