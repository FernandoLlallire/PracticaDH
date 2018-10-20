<!--    Utilizando un do/while realizar un script que tire la moneda hasta que se obtenga cara (el número 1). Al final del programa imprimir cuántos tiros de moneda llevó.-->
<?php
$cantidad=0;
do {
  $tiro=rand(0,1);
  $cantidad++;
  echo "tiro n° ".$cantidad."<br>";
} while (!$tiro);
echo "La cantidad de tiros fueron ".$cantidad;
?>
