<x-layout title="Editar Setor: {{ $setor->nome }}">
    <x-setores.form :action="route('setores.update', $setor->id)" :nome="$setor->nome" :update="true"/>
</x-layout>