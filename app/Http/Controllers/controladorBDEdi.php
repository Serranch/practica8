<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;
use DB;
use Carbon\Carbon;

class controladorBDEdi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultEdi= DB::table('tb_editorial')->get();
        
        return view('consultaEdi',compact('resultEdi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorFormulario $request)
    {
        DB::table('tb_editorial')->insert([
            "isbn"=> $request->input('ISBN'),
            "titulo"=> $request->input('titulo'),
            "autor"=> $request->input('autor'),
            "np"=> $request->input('paginas'),
            "editorial"=> $request->input('editorial'),
            "correo_Edi"=> $request->input('emailE'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('editorial/create')->with('confirmacion',"Editorial Guardada");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB:: table ('tb_recuerdos')->where('idRecuerdos', $id)->first();

        return view('eliminar', compact('consultaId')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB:: table ('tb_recuerdos')->where('idRecuerdos', $id)->first();

        return view('editar', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB:: table('tb_recuerdos')->where('idRecuerdos',$id)->update([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('recuerdo')->with('Actualizado',"Tu recuerdo se a actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB:: table('tb_recuerdos')->where('idRecuerdos',$id)->delete();

        return redirect('recuerdo')->with('Eliminacion',"abc");
    }
}
