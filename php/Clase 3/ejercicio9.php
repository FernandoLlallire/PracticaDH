<!--    Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)
  Resolver este problema con un for.
    Resolver este problema con un while.
    Resolver este problema con un do/while.-->
<?php
// voy a tener un  array de 20 elementos y en alguna posicion un 5
$existeUnCinco=false;
$cuenta=0;// Solo lo uso para corroborar la funcionalidad del break
for ($puntero=0;$puntero<10;$puntero++){
  $numeros[$puntero]=rand(0,10);
}
foreach ($numeros as $valor) {
  if ($valor==5){
    $existeUnCinco=true;
    echo "Genere al menos un  5 en el random($cuenta)<br>";
    break;//si existe un cinco no hace falta seguir evaluando lo demas
  }
  $cuenta++;
}
if (!$existeUnCinco) {
  echo "Se hardcodea un 5 en el array<br>";
  $numeros[rand(0,9)]=5;
}
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";
echo "Metodo mostrado mediante un FOR:<br>";
for ($puntero=0;$puntero<sizeof($numeros);$puntero++){
  echo "elemento n°$puntero del array: $numeros[$puntero]<br>";
  if ($numeros[$puntero]==5) {
    echo "Se encontró un 5!";
    break;
  }
}
echo "<hr>";
echo "Metodo mostrado mediante un WHILE:<br>";
$puntero=0;
while ($puntero < sizeof($numeros)) {
  echo "elemento n°$puntero del array: $numeros[$puntero]<br>";
  if ($numeros[$puntero]==5) {
    echo "Se encontró un 5!";
    break;
  }
  $puntero++;
}
echo "<hr>";
echo "Metodo mostrado mediante un DO/WHILE:<br>";
$puntero=0;
do {
  echo "elemento n°$puntero del array: $numeros[$puntero]<br>";
  if ($numeros[$puntero]==5) {
    echo "Se encontró un 5!";
    break;
  }
  $puntero++;
} while ($puntero < sizeof($numeros));

 ?>
