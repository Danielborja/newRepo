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
    <body class="antialiased">
        <h1>productos del usuario</h1>

        @for ($i = 0 ; $i < $cantidad; $i++)

            <p>product_type: {{ $collection[$i]->product_type }}</p>
            <p>brand: {{ $collection[$i]->brand }}</p>
            <p>model: {{ $collection[$i]->model }}</p>
            <p>price: {{ $collection[$i]->price }}</p>

                @endfor

            <!-- <p>product_type: {{ $articulos->product_type }}</p>
            <p>brand: {{ $articulos->brand }}</p>
            <p>model: {{ $articulos->model }}</p>
            <p>price: {{ $articulos->price }}</p> -->
    </body>
</html>