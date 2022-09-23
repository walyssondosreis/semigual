<x-layout title='Cadastro'>

    <h1 class="fs-6">SISTEMA VOX SEM IGUAL <br> SETORES </h1>

    <ul class="list-group">
        @foreach ($setores as $setor)

        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $setor->nome }}
            <span class="d-flex">
                <a href="" class="btn btn-primary btn-sm">E</a>
                <form action="" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
    <a href="{{ route('setores.create') }}" class="btn btn-primary mb-3">Adicionar</a>
    <a href="{{ route('setores.index') }}" class="btn mb-3 btn-primary">Cancelar</a>

</x-layout>