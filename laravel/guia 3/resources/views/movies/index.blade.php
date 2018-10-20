<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movies List</title>
  </head>
  <body>
    <h1>Lista de Peliculas</h1>
    @foreach ($movies as $oneMovie)
      <li><a href="/movies/{{$oneMovie->id}}">{{$oneMovie->title}}</a> Rating: {{$oneMovie->rating}}</li>
      {{-- listo todos los nombres con el metodo creado --}}
    @endforeach
  </body>
</html>
