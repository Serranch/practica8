<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormularioCli;
use DB;
use Carbon\Carbon;



class controladorBDCli extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('tb_cliente')->get();
        
        return view('cliente',compact('resultCli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularioCli');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorFormularioCli $request)
    {
        DB::table('tb_cliente')->insert([
            "ine"=> $request->input('INE'),
            "Nombres"=> $request->input('Nombres'),
            "A_Paterno"=> $request->input('ApellidoP'),
            "A_Materno"=> $request->input('ApellidoM'),
            "correo_Cli"=> $request->input('emailCli'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('cliente/create')->with('confirmacion',"Cliente Guardado");
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
