<x-layout title='Adicionar Setores'>
    <h1 class="fs-6">SISTEMA VOX SEM IGUAL <br> SETORES </h1>
    <x-setores.form :action="route('setores.store')" :nome="old('nome')" :update="false" />
</x-layout>