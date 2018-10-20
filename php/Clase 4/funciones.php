<!--    Generar un archivo llamado funciones.php:

    Definir una función mayor() que reciba 3 números y devuelva el mayor. Imprimir el resultado.
    Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite, imprimir el resultado.
    Definir una variable llamada numeroMagico, que contenga un número, dicha variable deberá estar en la 1er línea de nuestro código PHP.
    Modificar mayor() para que si recibe sólo 2 parámetros o si el tercer parámetro NO es un número (is_numeric()), compare a esos dos números con numeroMagico.
    Modificar tabla para que si recibe un sólo parámetro o si el segundo parámetro NO es un número, utilice numeroMagico como límite.-->
<?php
$numeroMagico=255;
function mayor ($number1,$number2,$number3=""){
  global $funcionesEjecutadas;//tomo la variable de quien me invoca
  $funcionesEjecutadas++;
  echo "\$funcionesEjecutadas=".$funcionesEjecutadas."<br>";
  if(is_null($number3)||!is_numeric($number3)){
    global $numeroMagico;//Tengo q definir mi scope para oider usar el numero magico
    return (($number1>$number2) ? (($number1>$numeroMagico) ? $number1 : $numeroMagico) : (($number2>$numeroMagico) ? $number2 : $numeroMagico));
  }else{
    return (($number1>$number2) ? (($number1>$number3) ? $number1 : $number3) : (($number2>$number3) ? $number2 : $number3));
  }
}
echo "el resultado de mayor() es ".mayor(4,7)."<br>";
function tabla ($base,$limite=""){
  $cuenta=1;
  if (is_null($limite)||!is_numeric($limite)){
    global $numeroMagico;
    $limite=$numeroMagico;
  }
  while($cuenta<$limite){
    $cuenta*=$base;
    echo (($cuenta<$limite)?$cuenta:"")."<br>";
  }
}
echo tabla(2)."<br>";
 ?>
