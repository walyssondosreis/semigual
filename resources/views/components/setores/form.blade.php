<form action={{ $action }} method="POST">
    <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
    @csrf
    @if($update)
    @method('PUT')
    @endif
    
    <div class="form-text mb-2 text-center">Preencha o formulário de setor</div>
    
    <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome"
     @isset($nome)value="{{ $nome }}" @endisset>

    <textarea id="descricao" name="descricao" class="form-control mb-2" style="height: 100px">
    @isset($descricao)
    {{ $descricao }}
    @endisset
    </textarea>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('setores.index') }}" class="btn btn-dark">Cancelar</a>
    </div>
</form>