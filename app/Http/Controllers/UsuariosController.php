<?php

namespace App\Http\Controllers;

use App\Mail\UsuarioCreated;
use App\Models\Perfil;
use App\Models\Setor;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('usuarios.index',
            compact('usuarios', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $perfis = Perfil::all();
        $setores = Setor::all();
        
        return view('usuarios.create',compact('perfis','setores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Envio de email
        $email= new UsuarioCreated();
        Mail::to($request->user())->send($email);

        $dados = $request->except(['token']);
        $dados['password'] = Hash::make($dados['password']);
        $usuario= Usuario::create($dados);
        
        Auth::login($usuario);

        return to_route('home');
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
        $usuario = Usuario::findOrFail($id);
        $perfis = Perfil::all();
        $setores = Setor::all();
        return view('usuarios.edit',compact('usuario','perfis','setores'));
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
        $dados = $request->except(['token']);

        Usuario::findOrFail($id)->update($dados);

        return to_route('usuarios.index')
        ->with('mensagem.sucesso',"Usuário atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::findOrFail($id)->delete();

        return to_route('usuarios.index')
        ->with('mensagem.sucesso',"Usuário removido com sucesso");
    }
}
