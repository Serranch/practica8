<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

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
        Route::get('formulario', 'vistaFormulario')-> name('form');
        Route::get('formularioCli', 'vistaFormularioCli')-> name('formCli');

    }
    );
    
Route::post('guardarEditorial',[ControladorVistas::class,'cargarFormulario'])->name('SaveMen');
Route::post('guardarCliente',[ControladorVistas::class,'cargarFormularioCli'])->name('SaveMen');   