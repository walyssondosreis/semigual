@component('mail::message')
# Usuario criado com sucesso!
- Teste lista
- Item 2
- Item 3 

@component('mail::button', ['url'=> route('usuarios.index')])
Ver usuários
@endcomponent

@endcomponent

