<!-- Utilizando un while haremos un script que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara. -->
<?php
$cantidadTotal=5;
$cantidadTiros=0;
while($cantidadTiros!=$cantidadTotal){
  $tiro=rand(0,1);
  if($tiro){
    $cantidadTiros++;
    echo "Este es el tiro n° ".$cantidadTiros."<br>";
  }
} ?>
