<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;


class ControladorVistas extends Controller
{
    public function cargarFormulario(validadorFormulario $req)
    {
        $tit=$req->input('titulo');
        return redirect()->route('form')->with('confirmacion', compact('tit'));
    }
    
    public function vistaFormulario(){
        return view('formulario');
        
    }

    public function cargarFormularioCli(validadorFormulario $req)
    {
        return redirect()->route('formCli')->with('confirmación1','Tu recuerdo llego al controlador');
    }

    public function vistaFormularioCli(){
        return view('formularioCli');
        
    }
    
}
