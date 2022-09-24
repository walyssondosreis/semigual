<x-layout title='Setores'>

    <ul class="list-group">
        @foreach ($setores as $setor)

        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $setor->nome }}
            <span class="d-flex">
                <a href="{{ route('setores.edit',$setor->id) }}" class="btn btn-outline-primary edit-btn btn-sm"><ion-icon name="create-outline"></ion-icon></a>
                <form action="{{ route('setores.destroy',$setor->id) }}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger delete-btn btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
    <div class="mt-3 text-center">
        <a href="{{ route('setores.create') }}" class="btn btn-primary mb-3">Adicionar</a>
        <a href="{{ route('setores.index') }}" class="btn mb-3 btn-primary btn-dark">Cancelar</a>
    </div>

</x-layout>