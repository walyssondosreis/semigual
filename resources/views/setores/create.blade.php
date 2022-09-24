<x-layout title='Cadastrar Setor'>
    <x-setores.form :action="route('setores.store')" :nome="old('nome')" :update="false" />
</x-layout>