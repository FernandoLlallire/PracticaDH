<!--    Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una  función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.-->
<?php
$funcionesEjecutadas =0;
include_once "funciones.php";
include_once "superficie.php";
function superficies($radio1,$radio2,$radio3){
  return mayor(circulo($radio1),circulo($radio2),circulo($radio3));
}
echo "el resultado de superficies(1,2,3)= ".superficies(1,2,3)."<br>";
echo $funcionesEjecutadas;

$myString="Me encanta php, A Mi tambien me encanta php!";
echo "La primera posicion de php es ".strpos($myString,'php');
?>
