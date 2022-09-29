<x-layout title="Editar Categoria: {{ $categoria->nome }}">

    <form action={{ route('categorias.update', $categoria->id) }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
        @method('PUT')
        
        <div class="form-text mb-2 text-center"> Preencha o formulário de categoria </div>
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome"
         @isset($categoria->nome)value="{{ $categoria->nome }}" @endisset>
    
        <textarea id="descricao" placeholder="Descrição" name="descricao" class="form-control mb-2" style="height: 100px">@isset($categoria->descricao){{ $categoria->descricao }}@endisset</textarea>
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Adicionar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
        
    </form> 

</x-layout>

