<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemIgualFormRequest;
use Illuminate\Http\Request;
use App\Models\Setor;


class SetoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $setores = Setor::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('setores.index', compact('setores', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemIgualFormRequest $request)
    {
        $setor = Setor::create($request->all());
        return to_route('setores.index')
            ->with('mensagem.sucesso', "Setor '{$setor->nome}' adicionado com sucesso");
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
        // dd($setores);
        $setor = Setor::findOrFail($id);
        return view('setores.edit')->with('setor', $setor);
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
        Setor::findOrFail($request->id)->update($request->all());

        return to_route('setores.index')
        ->with('mensagem.sucesso',"Setor atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Setor::findOrFail($id)->delete();

        return to_route('setores.index')
        ->with('mensagem.sucesso',"Setor removido com sucesso");
    }

}
