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

Route::resource('/chamados', ChamadosController::class)
    ->only(['index']);

Route::resource('/setores',SetoresController::class)
    ->only(['index','create','store','destroy']);
