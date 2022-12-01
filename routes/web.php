<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\controladorBDEdi;
use App\Http\Controllers\controladorBDCli;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route :: view ('/', [ControladorVistas::class,'vistaMenu'])-> name('m');

Route::get('formulario', [ControladorVistas::class,'vistaFormulario'])-> name('form');
*/
Route ::view('/','menu')->name('m');
Route::controller(ControladorVistas::class)->group(
    
    function(){
        //Route::get('formulario', 'vistaFormulario')-> name('form');
        //Route::get('formularioCli', 'vistaFormularioCli')-> name('formCli');

    }
    );
    
//Route::post('guardarEditorial',[ControladorVistas::class,'cargarFormulario'])->name('SaveMen');
//Route::post('guardarCliente',[ControladorVistas::class,'cargarFormularioCli'])->name('SaveMen');   

//Nuevas rutas para controladorBDEdi
//CREATE
Route::get('editorial/create',[controladorBDEdi::class, 'create'])-> name('editorial.create') ;
//STORE
Route :: post('editorial/store',[controladorBDEdi::class, 'store'])->name('editorial.store');
//INDEX
Route::get('editorial',[controladorBDEdi::class, 'index'])-> name('editorial.index');



//Nuevas rutas para controladorBDCli
//CREATE
Route::get('cliente/create',[controladorBDCli::class, 'create'])-> name('cliente.create') ;
//STORE
Route :: post('cliente/store',[controladorBDCli::class, 'store'])->name('cliente.store');
//INDEX
Route::get('cliente',[controladorBDCli::class, 'index'])-> name('cliente.index');

