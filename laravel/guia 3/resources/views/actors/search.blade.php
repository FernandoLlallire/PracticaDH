<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Busqueda usuario</title>
  </head>
  <body>
    <form class="" action="/actors/result" method="get">
      @csrf
      <label>Busqueda de usuario <input type="text" name="lastNameActor" ></label>
      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
