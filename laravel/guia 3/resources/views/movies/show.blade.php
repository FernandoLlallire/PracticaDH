<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie</title>
  </head>
  <body>
    <h1>{{($movie->title) ?? "No existe ID"}}</h1>
    <h2>Rating: {{$movie->rating?? "No existe Rating|"}}</h2>
    <h2>Length: {{$movie->length?? "No existe Length"}}</h2>
    <h2>Awards: {{$movie->awards?? "No existe Awards"}}</h2>
  </body>
</html>
