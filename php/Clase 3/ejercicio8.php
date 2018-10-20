<!--    Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada uno de los nombres en pantalla.
    Resolver este problema con un for.
    Resolver este problema con while.
    Resolver este problema con un do/while.
    Resolver este problema con un foreach.-->

<?php
$nombres=["Fer","Ruben","Yayo","Leo","Soul"];
echo "<pre>";
var_dump($nombres);
echo "</pre>";
echo "<hr>";
echo "Metodo mostrado mediante un FOR:<br>";
for ($contador=0; $contador <sizeof($nombres) ; $contador++) {
  echo "Nombre n° $contador : ".$nombres[$contador]."<br>";
}
echo "<hr>";
echo "Metodo mostrado mediante un WHILE:<br>";
$contador=0;
while ($contador<sizeof($nombres)) {
  echo "Nombre n° $contador : ".$nombres[$contador]."<br>";
  $contador++;
}
echo "<hr>";
echo "Metodo mostrado mediante un DO/WHILE:<br>";
$contador=0;
do {
  echo "Nombre n° $contador : ".$nombres[$contador]."<br>";
  $contador++;
} while ($contador < sizeof($nombres));
echo "<hr>";
echo "Metodo mostrado mediante un FOR EACH:<br>";
foreach ($nombres as $key => $value) {
  echo "El nombre n° ".($key+1)." es: $value<br>";
}
?>
