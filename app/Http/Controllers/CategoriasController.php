<?php

namespace App\Http\Controllers;

use App\Http\Requests\SemIgualFormRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('categorias.index', compact('categorias', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SemIgualFormRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria '{$categoria->nome}' adicionado com sucesso");
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
        // dd($categorias);
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit')->with('categoria', $categoria);
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
        Categoria::findOrFail($request->id)->update($request->all());

        return to_route('categorias.index')
        ->with('mensagem.sucesso',"Categoria atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();

        return to_route('categorias.index')
        ->with('mensagem.sucesso',"Categoria removido com sucesso");
    }

}
