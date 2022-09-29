<x-layout title="Editar Setor: {{ $setor->nome }}">

    <form action={{ route('setores.update', $setor->id) }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
        @method('PUT')
        
        <div class="form-text mb-2 text-center"> Preencha o formulário de setor </div>
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome"
         @isset($setor->nome)value="{{ $setor->nome }}" @endisset>
    
        <textarea id="descricao" placeholder="Descrição" name="descricao" class="form-control mb-2" style="height: 100px">@isset($setor->descricao){{ $setor->descricao }}@endisset</textarea>
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Adicionar</button>
            <a href="{{ route('setores.index') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
        
    </form> 

</x-layout>

