<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemIgualFormRequest;
use Illuminate\Http\Request;
use App\Models\Perfil;


class PerfisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perfis = Perfil::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('perfis.index', compact('perfis', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemIgualFormRequest $request)
    {
        $perfil = Perfil::create($request->all());
        return to_route('perfis.index')
            ->with('mensagem.sucesso', "Perfil '{$perfil->nome}' adicionado com sucesso");
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
        // dd($perfis);
        $perfil = Perfil::findOrFail($id);
        return view('perfis.edit')->with('perfil', $perfil);
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
        Perfil::findOrFail($request->id)->update($request->all());

        return to_route('perfis.index')
        ->with('mensagem.sucesso',"Perfil atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perfil::findOrFail($id)->delete();

        return to_route('perfis.index')
        ->with('mensagem.sucesso',"Perfil removido com sucesso");
    }

}
