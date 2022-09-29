<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemIgualFormRequest;
use Illuminate\Http\Request;
use App\Models\Estado;


class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estados = Estado::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('estados.index', compact('estados', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemIgualFormRequest $request)
    {
        $estado = Estado::create($request->all());
        return to_route('estados.index')
            ->with('mensagem.sucesso', "Estado '{$estado->nome}' adicionado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($estados);
        $estado = Estado::findOrFail($id);
        return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SemIgualFormRequest $request)
    {
        // dd('chegou aqui');
        Estado::findOrFail($request->id)->update($request->all());

        return to_route('estados.index')
        ->with('mensagem.sucesso',"Estado atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estado::findOrFail($id)->delete();

        return to_route('estados.index')
        ->with('mensagem.sucesso',"Estado removido com sucesso");
    }

}
