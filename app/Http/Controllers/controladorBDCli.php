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
        $resultCli= DB::table('tb_cliente')->get();
        
        return view('consultaCli',compact('resultCli'));
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
        $consultaId= DB:: table ('tb_cliente')->where('idCliente', $id)->first();

        return view('ModalEliminarCli', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB:: table ('tb_cliente')->where('idCliente', $id)->first();

        return view('ModalActualizarCli', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorFormularioCli $request, $id)
    {
        DB:: table('tb_cliente')->where('idCliente',$id)->update([
            "ine"=> $request->input('INE'),
            "Nombres"=> $request->input('Nombres'),
            "A_Paterno"=> $request->input('ApellidoP'),
            "A_Materno"=> $request->input('ApellidoM'),
            "correo_Cli"=> $request->input('emailCli'),
            "updated_at"=> Carbon::now(),
        ]);
        return redirect('cliente')->with('Actualizado',"Tu recuerdo se a actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB:: table('tb_cliente')->where('idCliente',$id)->delete();

        return redirect('cliente')->with('Eliminacion',"abc");
    }
}
