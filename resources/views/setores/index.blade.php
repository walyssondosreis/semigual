


<x-layout title='Setores'>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
    {{ $mensagemSucesso }}
    </div>
    @endisset

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
        <a href="{{ route('setores.create') }}" class="btn btn-primary mb-3 botao">Adicionar</a>
        <a href="{{ route('setores.index') }}" class="btn mb-3 btn-primary btn-dark botao">Cancelar</a>
    </div>

</x-layout>


{{-- Modal De Exclusão --}}
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         <form action="{{ route('setores.destroy',$setor->id) }}" method="POST" class="ms-2">
            <div class="modal-body">
            
                @csrf
                @method('DELETE')
                Apagar mesmo essa bagaça? 
            
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
  </div> --}}

