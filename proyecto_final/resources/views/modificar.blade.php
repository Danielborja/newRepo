<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/modificar/{{$id}}"  method="POST" >
      @csrf
          <label>Usuario</label>
          <input name="name"></input><br><br>
          <label>dni</label>
          <input name="dni"></input><br><br>
          <label>contact</label>
          <input name="contact"></input><br><br>
          <button type="submit">modificar</button>
        </form>

        <button>
            <a href="{{url('borrar',['id' => $id])}}">borrar</a>
        </button>
</body>
</html>