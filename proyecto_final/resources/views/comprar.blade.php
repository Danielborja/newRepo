<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>datos del producto</title>
  </head>
  <body class="antialiased">

        <form action="/comprado/{{$id}}"  method="POST" >
        @csrf
          <label>Product type</label>
          <input name="product_type"></input><br><br>
          <label>Brand</label>
          <input name="brand"></input><br><br>
          <label>Model</label>
          <input name="model"></input><br><br>
          <label>Price</label>
          <input name="price"></input><br><br>
          <button type="submit">buy</button>
        </form>

    </body>
</html>
