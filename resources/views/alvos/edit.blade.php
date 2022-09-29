<x-layout title="Editar Alvo: {{ $alvo->nome }}">

    <form action={{ route('alvos.update', $alvo->id) }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
        @method('PUT')
        
        <div class="form-text mb-2 text-center"> Preencha o formulário de alvo </div>
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome"
         @isset($alvo->nome)value="{{ $alvo->nome }}" @endisset>
    
        <textarea id="descricao" placeholder="Descrição" name="descricao" class="form-control mb-2" style="height: 100px">@isset($alvo->descricao){{ $alvo->descricao }}@endisset</textarea>
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Adicionar</button>
            <a href="{{ route('alvos.index') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
        
    </form> 

</x-layout>

