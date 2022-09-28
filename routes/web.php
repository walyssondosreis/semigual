<?php

use App\Http\Controllers\ChamadosController;
use App\Http\Controllers\SetoresController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return to_route('setores.index');
});

// Grupo de Rotas para : Chamados
Route::controller(ChamadosController::class)->group(function(){
    Route::get('/chamados','index')->name('chamados.index');
});

// Grupo de Rotas para : Setores
Route::controller(SetoresController::class)->group(function(){
    Route::get('/setores','index')->name('setores.index');
    Route::get('/setores/criar','create')->name('setores.create');
    Route::get('/setores/editar/{id}','edit')->name('setores.edit');
    Route::post('/setores/salvar','store')->name('setores.store');
    Route::put('/setores/atualizar/{id}','update')->name('setores.update');
    Route::delete('/setores/deletar/{id}','destroy')->name('setores.destroy');
});
Route::get('/teste', function(){
    return view('welcome');
});

