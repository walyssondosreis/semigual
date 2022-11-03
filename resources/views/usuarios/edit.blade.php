<x-layout title="Editar Usuario: {{ $usuario->nome }}">

    <form action={{ route('usuarios.update', $usuario->id) }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
        @method('PUT')
        
        <div class="form-text mb-2 text-center"> Preencha o formulário de Usuário </div>
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome"
         @isset($usuario->nome)value="{{ $usuario->nome }}" @endisset>

         <input type="text" id="nome_usr" name="nome_usr" class="form-control mb-2" placeholder="Nome de usuário"
         @isset($usuario->nome_usr)value="{{ $usuario->nome_usr }}" @endisset>

         <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Email"
         @isset($usuario->email)value="{{ $usuario->email }}" @endisset>

         <select class="form-select mb-2" name="perfil_id">
            @foreach ($perfis as $perfil)
                <option value="{{ $perfil->id }}" 
                    @if ($perfil->id == $usuario->perfil_id) selected @endif>{{ $perfil->nome }}</option>
            @endforeach
        </select>

        <select class="form-select mb-2" name="setor_id">
            @foreach ($setores as $setor)
                <option value="{{ $setor->id }}" 
                    @if ($setor->id == $usuario->setor_id) selected @endif>{{ $setor->nome }}</option>
            @endforeach
        </select>
        
         <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Adicionar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
        
    </form> 

</x-layout>

