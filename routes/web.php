<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvidenciasController;
use App\Models\Evidencia;

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
// Route::get('/',function(){ return redirect('/evidencias');});
// Route::get('/evidencias',[EvidenciasController::class, 'index'])->name('listar_evidencias'); 
// Route::get('/evidencias/criar',[EvidenciasController::class, 'create'])->name('grava_evidencia'); 
// Route::post('/evidencias/criar',[EvidenciasController::class, 'store']);
// Route::delete('/evidencias/{evid_id}',[EvidenciasController::class, 'destroy']);

Route::get('/',function(){ return redirect('/evidencias');});

//################## Agrupando rotas ######################################
Route::controller(EvidenciasController::class)->group(function(){
    Route::get('/evidencias','index')->name('evidencias.index'); 
    Route::get('/evidencias/criar','create')->name('evidencias.create'); 
    Route::post('/evidencias/criar','store')->name('evidencias.store');
    Route::delete('/evidencias/{evid_id}','destroy')->name('evidencias.destroy');
    Route::get('/evidencias/{evid_id}/edit','edit')->name('evidencias.edit');
    Route::put('/evidencias/{evid_id}','update')->name('evidencias.update');
});
//Route::resource('evidencias',EvidenciasController::class);
//################## se estiver usando nomes de rotas padrão ######################################
// VERBOS   URI                       ACTION      NOME DA ROTA
// ----------------------------------------------------
// GET      /evidencias                    index       evidencias.index
// GET      /evidencias/create             create      evidencias.create
// POST     /evidencias                    store       evidencias.store
// GET      /evidencias{id}        show        evidencias.show
// GET      /evidencias/{id}/edit  edit        evidencias.edit
// PUT/PACH /evidencias/{id}       update      evidencias.update
// DELETE   /evidencias/{id}       destroy     evidencias.destroy 