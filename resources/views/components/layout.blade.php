<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexbox.css') }}">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
</head>

<body>

    <header>

        <nav class="cabecalho">
            <a class="logo" href="/videos"></a>

            <div class="cabecalho__icones">
                <a href="/videos/adicionar" class="cabecalho__videos"></a>
                <a href="#" class="cabecalho__sair">Sair</a>
            </div>
        </nav>

    </header>

    @if ($errors->any())
        <div class="mensagemErro-div">
            <div class="mensagemErro">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

        {{ $slot }}

</body>

</html>