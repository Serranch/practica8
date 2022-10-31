<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class ControladorVistas extends Controller
{
    public function cargarFormulario(validadorFormulario $req){
        return redirect()->route('form')->with('confirmo', 'acepto lo que propones');
    }
    
    public function vistaFormulario(){
        return view('formulario');
    }
    
}
