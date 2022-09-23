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
    <div class="container form-signin rounded-3 border border-2 form-control w-100 m-auto text-center">
        <div class="rounded border" style="padding: 20px;">
            <img class="mb-4" src="{{ url('storage/picture/logox1.png') }}" alt="" width="60" height="40">
            {{ $slot }}
            <!-- Campo creditos -->
            <p class="mt-3 text-muted">&copy; <?php echo "Vox Conexão " . date('Y') ?></p>
        </div>
    </div>
</body>

</html>