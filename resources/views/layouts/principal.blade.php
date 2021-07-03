<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App test - @yield('titulo')</title>
</head>
<body>
    <header>
        @section('navbar')
            <p>NAVBAR Padrao</p>
        @show
    </header>
    <main>
        <div>
            @yield('conteudo')
        </div>
    </main>
    <footer>
        @section('footer')
            @include('layouts._includes._footer')
        @show
    </footer>
</body>
</html>