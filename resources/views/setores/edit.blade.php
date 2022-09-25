<x-layout title="Editar Setor: {{ $setor->nome }}">
    <x-setores.form :action="route('setores.update', $setor->id)" 
    :nome="$setor->nome" 
    :descricao="$setor->descricao"
    :update="true"/>
</x-layout>