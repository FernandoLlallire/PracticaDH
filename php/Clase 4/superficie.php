<!--    Generar un archivo llamado superficie.php:

    Definir una función triangulo() que retorne su superficie (¿Cómo calcular la superficie de un triángulo?).
    Definir una función rectangulo() que retorne su superficie (¿Cómo calcular la superficie de un rectángulo?).
    Definir una función cuadrado() que retorne su superficie (¿Cómo calcular la superficie de un cuadrado?).
    Utilizando la función pi(), definir una función circulo() que retorne su superficie. ¿Cómo calcular la superficie de un círculo?)-->
<?php
function triangulo($base,$altura){
  return (0.5*$base*$altura);
}
function rectangulo($base,$altura){
  return ($base*$altura);
}
function cuadrado($lado){
  return ($lado*$lado);
}
function circulo($radio){
  global $funcionesEjecutadas;//tomo la variable de quien me invoca
  $funcionesEjecutadas++;
  echo "\$funcionesEjecutadas=".$funcionesEjecutadas."<br>";
  return pi()*$radio*$radio;
}
echo "triangulo(2,4)=".triangulo(2,4)."<br>";
echo "rectangulo(2,4)=".rectangulo(2,4)."<br>";
echo "cuadrado(2)=".cuadrado(2)."<br>";
echo "circulo(2)=".circulo(2)."<br>";
?>
