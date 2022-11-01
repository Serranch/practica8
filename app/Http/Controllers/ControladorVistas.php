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
    
}
