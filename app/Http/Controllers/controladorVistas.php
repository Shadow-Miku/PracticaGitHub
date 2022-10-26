<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistro;

class controladorVistas extends Controller
{
 

    public function procesarRegistro(ValidadorRegistro $req){
        return redirect('Formulario')->with('confirmacion','Registro Correcto');
    } /* Funcion para registrar cosas en el formulario */

    /*Funciones para cada vista de la pagina*/
    public function showWelcome(){
        return view('Welcome');
    }

    public function showInicio(){
        return view('Inicio');
    } 

    public function showFormulario(){
        return view('Formulario');
    } 

    public function showTabla(){
        return view('Tabla');
    } 

}
