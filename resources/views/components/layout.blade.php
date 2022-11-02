<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="{{ asset('css/semigual.css') }}">
</head>

<body> 

    {{-- @if (Auth::check()) --}}
        <x-navbar> </x-navbar>
    {{-- @endif --}}

    
    <div class="container form-signin rounded-3 border border-2 form-control m-auto">
        <div class="rounded border" style="padding: 20px;">
            <div class="text-center">
                <h1 class="fs-6">{!! mb_strtoupper($title) !!} </h1>
            </div>
            
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif          

            {{ $slot }}
        </div>
    </div>

    {{-- Bibliotecas de ícones do Ionic --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    {{-- Bibliotecas do Jquery necessárias no bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

   

</body>

</html>