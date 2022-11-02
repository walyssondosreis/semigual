
<x-layout title='Entrar no Sistema'>
    
    <form action="{{ route('login.store') }}" method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
    
        <div class="form-text mb-2 text-center"> Tela de Login </div>
        {{-- <div class="form-text mb-2 text-center">Preencha este formulário</div> --}}
        
        <input type="text" id="nome_usr" name="nome_usr" class="form-control mb-2" placeholder="Nome de usuário">
    
        <input type="password" id="password" name="password" class="form-control mb-2" placeholder="Senha">
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Entrar</button>
            
        </div>
    </form>
    
    
</x-layout>