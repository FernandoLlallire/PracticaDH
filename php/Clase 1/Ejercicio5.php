<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <?php
      $auto=["marca"=>["renault","vw"],
             "Modelo"=>["gol","laguna"],
             "color"=>["rojo","gris","blanco"],
             "patente"=>["acc123","ksd231"],
             "año"=>[1991,2000,2018],
            ];
            /*Se ve que al agregar un nuevo elemento en el array se posiciona
            al final de la cadena con el valor
            este no pisa nada por que no hay nada definido en esa posicion
            (ya que es un array asociativo)*/
      $auto[0]="Fernando llallire";
      $auto["aseguradora"]="Sancor seguros";
      /*Cambiamos una de las posiciones del array indexado*/
      $auto["patente"][1]="dir136";
      $auto[0]="Ruben Chirinos";
      echo "<pre>";
      var_dump($auto);
      echo "</pre>";
     ?>
  </body>
</html>
