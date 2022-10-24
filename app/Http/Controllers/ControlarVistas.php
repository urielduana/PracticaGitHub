<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarForm;


class ControlarVistas extends Controller
{
    public function ShowFormulario(){
        return view('formulario');
    }
    public function ShowTabla(){
        return view('tabla');
    }

    public function ProcesarForm(ValidarForm $req){
        return redirect('formulario')->with('confirma', 'validacion completa');
    }
}
