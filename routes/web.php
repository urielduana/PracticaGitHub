<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlarVistas;

Route::get('/', function () {
    return view('tabla');
});

Route::get('formulario', [ControlarVistas::class,'ShowFormulario']);
Route::get('tabla', [ControlarVistas::class,'ShowTabla']);


Route::post('comprobarForm', [ControlarVistas::class, 'ProcesarForm']);
