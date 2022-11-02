<?php

use App\Http\Controllers\AlvosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ChamadosController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfisController;
use App\Http\Controllers\SetoresController;
use App\Http\Controllers\UsuariosController;
use App\Http\Middleware\Autenticador;
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
// Rota Padrão
Route::get('/', function () {
    return to_route('login');
})->name('home');

//Grupo de Rotas para : Login e Logout
Route::controller(LoginController::class)
    ->group(function(){
        Route::get('/login','index')->name('login');
        Route::post('/login','store')->name('login.store');
        Route::post('/logout','destroy')->name('logout');
    });

// Grupo de Rotas para : Chamados
Route::controller(ChamadosController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/chamados','index')->name('chamados.index');
});

// Grupo de Rotas para : Setores
Route::controller(SetoresController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/setores','index')->name('setores.index');
        Route::get('/setores/criar','create')->name('setores.create');
        Route::get('/setores/editar/{id}','edit')->name('setores.edit');
        Route::post('/setores/salvar','store')->name('setores.store');
        Route::put('/setores/atualizar/{id}','update')->name('setores.update');
        Route::delete('/setores/deletar/{id}','destroy')->name('setores.destroy');
});

// Grupo de Rotas para : Perfis
Route::controller(PerfisController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/perfis','index')->name('perfis.index');
        Route::get('/perfis/criar','create')->name('perfis.create');
        Route::get('/perfis/editar/{id}','edit')->name('perfis.edit');
        Route::post('/perfis/salvar','store')->name('perfis.store');
        Route::put('/perfis/atualizar/{id}','update')->name('perfis.update');
        Route::delete('/perfis/deletar/{id}','destroy')->name('perfis.destroy');
});

// Grupo de Rotas para : Alvos
Route::controller(AlvosController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/alvos','index')->name('alvos.index')->middleware(Autenticador::class);
        Route::get('/alvos/criar','create')->name('alvos.create');
        Route::get('/alvos/editar/{id}','edit')->name('alvos.edit');
        Route::post('/alvos/salvar','store')->name('alvos.store');
        Route::put('/alvos/atualizar/{id}','update')->name('alvos.update');
        Route::delete('/alvos/deletar/{id}','destroy')->name('alvos.destroy');
});

// Grupo de Rotas para : Categorias
Route::controller(CategoriasController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/categorias','index')->name('categorias.index');
        Route::get('/categorias/criar','create')->name('categorias.create');
        Route::get('/categorias/editar/{id}','edit')->name('categorias.edit');
        Route::post('/categorias/salvar','store')->name('categorias.store');
        Route::put('/categorias/atualizar/{id}','update')->name('categorias.update');
        Route::delete('/categorias/deletar/{id}','destroy')->name('categorias.destroy');
});

// Grupo de Rotas para : Estados
Route::controller(EstadosController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/estados','index')->name('estados.index');
        Route::get('/estados/criar','create')->name('estados.create');
        Route::get('/estados/editar/{id}','edit')->name('estados.edit');
        Route::post('/estados/salvar','store')->name('estados.store');
        Route::put('/estados/atualizar/{id}','update')->name('estados.update');
        Route::delete('/estados/deletar/{id}','destroy')->name('estados.destroy');
});

// Grupo de Rotas para : Usuarios
Route::controller(UsuariosController::class)
    ->middleware(Autenticador::class)
    ->group(function(){
        Route::get('/usuarios','index')->name('usuarios.index');
        Route::get('/usuarios/criar','create')->name('usuarios.create')->withoutMiddleware(Autenticador::class);
        Route::post('/usuarios/salvar','store')->name('usuarios.store')->withoutMiddleware(Autenticador::class);
        Route::get('/usuarios/editar/{id}','edit')->name('usuarios.edit'); 
        Route::put('/usuarios/atualizar/{id}','update')->name('usuarios.update');
        Route::delete('/usuarios/deletar/{id}','destroy')->name('usuarios.destroy');
});