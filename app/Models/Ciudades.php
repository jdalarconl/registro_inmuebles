<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    //De muchos a uno
    public function departamento(){
        return $this->belongsTo('App\Models\Departamentos');
    }

}
