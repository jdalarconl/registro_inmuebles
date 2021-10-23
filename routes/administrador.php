<?php

use App\Http\Controllers\Admin\EditController;
use Illuminate\Support\Facades\Route;


// Route::get('/administrador', InicioController::class);
Route::get('administrador/', [EditController::class, 'edit'])->name('administrador.edit');
