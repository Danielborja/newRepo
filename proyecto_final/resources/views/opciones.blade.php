<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body>

        <button>
            <a href="{{url('vistaComprar',['id' => $id])}}">comprar</a>
        </button><br><br>

        <button>
            <a href="{{url('vistaModificar',['id' => $id])}}">modificar mi perfil</a>
        </button>

    </body>
</html>