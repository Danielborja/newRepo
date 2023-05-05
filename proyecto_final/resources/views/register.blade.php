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

        <form action="/new-buyer"  method="POST" >
          @csrf
          <label>Usuario</label>
          <input name="name"></input><br><br>
          <label>dni</label>
          <input name="dni"></input><br><br>
          <label>contact</label>
          <input name="contact"></input><br><br>
          <button type="submit">Submit</button>
        </form>

    </body>
</html>