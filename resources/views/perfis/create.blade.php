<x-layout title='Cadastrar Perfil'>
    
    <form action={{ route('perfis.store') }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
    
        <div class="form-text mb-2 text-center"> Preencha o formulário de perfil </div>
        {{-- <div class="form-text mb-2 text-center">Preencha este formulário</div> --}}
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome">
    
        <textarea id="descricao" placeholder="Descrição" name="descricao" class="form-control mb-2" style="height: 100px"></textarea>
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Adicionar</button>
            <a href="{{ route('perfis.index') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
    </form>
    
    
    
</x-layout>