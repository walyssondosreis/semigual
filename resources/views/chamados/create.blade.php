<x-layout title="Abrir Chamado">

    <form action="" class="text-center">

        {{-- Campo nome de usuário --}}
      <div class="form-floating rounded mt-3">
        <input readonly name="usuario" type="text" class="form-control" id="floatingInput" placeholder="name" value="{{ Auth::user()->nome_usr }}">
        <label for="floatingInput">Chamado aberto pelo usuário</label>
      </div>

      {{-- Campo setor --}}
      <div class="input-group form-floating">
        <select name="setor" class="form-select" id="inputGroupSelect01">
             @foreach ($setores as $setor)
                 <option value="{{ $setor->id }}" @php if($setor->id == Auth::user()->setor_id) echo('selected'); @endphp> {{ $setor->nome }}</option>
             @endforeach
         
        </select>
        <label for="inputGroupSelect01">Selecione o setor da solicitação</label>
      </div>

      {{-- Campo categoria --}}
      <div class="input-group mb-3 form-floating">
        <select name="categoria" class="form-select" id="inputGroupSelect02">
          @foreach ($categorias as $categoria )
            <option value="{{ $categoria->id }}"> {{ $categoria->nome }}</option>
          @endforeach

        </select>
        <label for="inputGroupSelect02">Selecione o tipo de solicitação</label>
      </div>
  
    {{-- Campo Sistemas --}}
        <div class="postion-sticky" style="max-width: 500px">
            @foreach ($alvos as $alvo)

            <input type="checkbox" class="btn-check" name="{{ $alvo->id }}" id="{{ $alvo->id }}"  value="{{ $alvo->id }}"  autocomplete="off">
            <label class="botao btn btn-outline-primary " style="min-height: 55px" for="{{ $alvo->id }}" > {{ $alvo->nome }} </label>
                
            @endforeach
        </div>

     {{-- Campo resumo/descrição --}}
        <div class="form-floating mt-3">
            <textarea name="resumo" class="form-control" placeholder="text" id="floatingTextarea01" style="height: 100px;"></textarea>
            <label for="floatingTextarea01">Resumo objetivo do problema...</label>
        </div>   
     
    {{-- Campo anexar arquivo --}}
        <div class="input-group mb-3 fs-6">
            <input type="file" class="form-control" id="inputGroupFile01" multiple="multiple">
        </div>

     {{-- Campo botões | Cancelar | Confirmar --}}
     <div class="btn-group" role="group">

        <button class=" btn btn-lg btn-outline-secondary " type="button">Cancelar</button>
        <button class=" btn btn-lg btn-outline-primary" type="submit">Confirmar</button>
      </div>

    </form>

</x-layout>