<x-layout title="Editar Estado: {{ $estado->nome }}">

    <form action={{ route('estados.update', $estado->id) }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
        @method('PUT')
        
        <div class="form-text mb-2 text-center"> Preencha o formulário de estado </div>
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome"
         @isset($estado->nome)value="{{ $estado->nome }}" @endisset>
    
        <textarea id="descricao" placeholder="Descrição" name="descricao" class="form-control mb-2" style="height: 100px">@isset($estado->descricao){{ $estado->descricao }}@endisset</textarea>
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Adicionar</button>
            <a href="{{ route('estados.index') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
        
    </form> 

</x-layout>

