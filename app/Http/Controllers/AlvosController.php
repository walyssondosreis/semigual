<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemIgualFormRequest;
use Illuminate\Http\Request;
use App\Models\Alvo;


class AlvosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alvos = Alvo::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('alvos.index', compact('alvos', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alvos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemIgualFormRequest $request)
    {
        $alvo = Alvo::create($request->all());
        return to_route('alvos.index')
            ->with('mensagem.sucesso', "Alvo '{$alvo->nome}' adicionado com sucesso");
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
        // dd($alvos);
        $alvo = Alvo::findOrFail($id);
        return view('alvos.edit')->with('alvo', $alvo);
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
        Alvo::findOrFail($request->id)->update($request->all());

        return to_route('alvos.index')
        ->with('mensagem.sucesso',"Alvo atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alvo::findOrFail($id)->delete();

        return to_route('alvos.index')
        ->with('mensagem.sucesso',"Alvo removido com sucesso");
    }

}
