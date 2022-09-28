<x-layout title="Editar Setor: {{ $setor->nome }}">
    <x-edit :action="route('setores.update', $setor->id)" 
    :nome="$setor->nome" 
    :descricao="$setor->descricao"
    descForm="Preencha o formulário de setor"
    />
</x-layout>

