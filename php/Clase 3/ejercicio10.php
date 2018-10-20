    <!-- Utilizando la funcion “Range”(http://php.net/manual/en/function.range.php) crear un rango de letras (de la a hasta la o), imprimir un valor que diga “En la posición [index] se encuentra el valor [value]” donde [value] se reemplazará por cada valor del array y [index] representa el índice. -->
<?php
 $arrayLetras=range("a","o");
// echo "<pre>";
// var_dump($arrayLetras);
// echo "</pre>";
// echo "<hr>";
foreach ($arrayLetras as $puntero => $valor) {
  echo "En la posición '$puntero' se encuentra el valor '$valor'<br>";
}
?>
