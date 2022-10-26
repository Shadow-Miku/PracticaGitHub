<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});
 
*/

/*Rutas individuales por controlador*/

Route::get('/', [controladorVistas::class,'showWelcome'])->name('apWelc');  
Route::get('Inicio', [controladorVistas::class,'showInicio'])->name('apIni');
Route::get('Formulario', [controladorVistas::class,'showFormulario'])->name('apForm');
Route::get('Tabla', [controladorVistas::class,'showTabla'])->name('apTab');



/*Rutas POST para envio de datos en formulario*/
Route::post('CargarRegistro', [controladorVistas::class,'procesarRegistro'])->name('CarReg');