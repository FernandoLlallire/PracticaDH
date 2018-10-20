<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actors List</title>
  </head>
  <body>
    <h1>Lista de Actores</h1>
    @foreach ($actors as $value)
      <li>{{$value->getFullName()}}</li>
      {{-- listo todos los nombres con el metodo creado --}}
    @endforeach
  </body>
</html>
