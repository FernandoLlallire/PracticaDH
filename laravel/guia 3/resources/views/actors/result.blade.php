<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultado Busqueda</title>
  </head>
  <body>
    {{-- <h1>{{$results->first_name." ".$results->last_name }}</h1> --}}
    @foreach ($results as $value)
      <h3>{{$value->first_name." ".$value->last_name}}</h3>
    @endforeach
  </body>
</html>
