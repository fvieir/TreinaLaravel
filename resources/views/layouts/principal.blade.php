<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App teste - @yield('titulo')</title>
</head>
<body>
    <header>
        @section('Navbar')
            Aqui entra a NAVBAR padrao
        @show
    </header>

    <main>
        @yield('conteudo')
    </main>

    <footer>
        @include('layouts._includes._footer')
    </footer>
</body>
</html>