<?php

use App\Http\Controllers\Admin\EditController;
use App\Http\Controllers\Admin\UsuarioController;
use Illuminate\Support\Facades\Route;



// Route::get('/administrador', InicioController::class);
Route::get('login/',[UsuarioController::class,'show'])->name('login.show');
Route::get('administrador/', [EditController::class, 'edit'])->name('administrador.edit');
