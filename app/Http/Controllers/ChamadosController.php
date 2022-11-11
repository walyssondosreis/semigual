<?php

namespace App\Http\Controllers;

use App\Models\Alvo;
use App\Models\Categoria;
use App\Models\Chamado;
use App\Models\Estado;
use App\Models\Interacao;
use App\Models\Setor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setores = Setor::all();
        $categorias = Categoria::all();
        $alvos = Alvo::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('chamados.create')
        ->with('setores',$setores)
        ->with('categorias',$categorias)
        ->with('alvos',$alvos)
        ->with('mensagemSucesso',$mensagemSucesso);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dados_chamado= $request->only('usuario','setor','categoria','alvos');
        $dados_interacao = $request->only('resumo');
        $estado_ini=DB::table('estados')
            ->where('nome','Não atendido')
            ->get()[0]->id;

        $chamado = Chamado::create([
            'usuario_id'=>$dados_chamado['usuario'],
            'categoria_id'=>$dados_chamado['categoria'],
            'setor_id'=>$dados_chamado['setor'],
        ]);

        $interacao = Interacao::create([
            'descricao' => $dados_interacao['resumo'],
            'estado_id' => $estado_ini,
            'chamado_id' => $chamado->id,

        ]);
        foreach($dados_chamado['alvos']  as $alvo){
            DB::insert("INSERT into chamados_alvos(chamado_id, alvo_id) VALUES('{$chamado->id}','{$alvo}');");
        }

        return to_route('chamados.create')->with('mensagem.sucesso',"Chamado criado com Sucesso!");

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
