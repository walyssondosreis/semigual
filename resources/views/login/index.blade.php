<x-layout title='Entrar no Sistema'>
    
    <form action="{{ route('login.store') }}" method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
    
        <div class="form-text mb-2 text-center"> Tela de Login </div>
        {{-- <div class="form-text mb-2 text-center">Preencha este formulário</div> --}}
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome">
    
        <input type="password" id="senha" name="senha" class="form-control mb-2" placeholder="Senha">
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Entrar</button>
            <a href="{{ route('login') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
    </form>
    
    
    
</x-layout>