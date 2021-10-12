<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietarios extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'lastname', 'tipo_doc', 'doc_number', 'email', 'phone','asesor'];

    
}
