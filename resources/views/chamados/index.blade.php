<x-layout title="Lista de Chamados">


    @isset($mensagemSucesso)
    <div class="alert alert-success">
    {{ $mensagemSucesso }}
    </div>
    @endisset 

    <ul class="list-group">
        @foreach ($chamados as $chamado)

        <li class="list-group-item d-flex justify-content-between align-items-center">
            #{{ $chamado->id ." ". $chamado->usuarios->nome_usr }} <br>
                @foreach ($chamado->alvos as $alvo )
                    {{ $alvo->nome }}
                @endforeach <br>
                {{ $chamado->interacoes->find(1)->descricao}}
            <span class="d-flex">
                <a href="" class="btn btn-outline-primary edit-btn btn-sm"><ion-icon name="create-outline"></ion-icon></a>
            </span>
        </li>
        @endforeach
    </ul>

</x-layout>