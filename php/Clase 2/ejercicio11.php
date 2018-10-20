<?php
$colorRemera="blue";
$mensaje="";
switch ($colorRemera) {
  case 'amarillo':
      $mensaje="El color de la remera es del color primario $colorRemera";
    break;
  case 'rojo':
      $mensaje="El color de la remera es del color primario $colorRemera";
    break;
  case 'verde':
      $mensaje="El color de la remera es del color primario $colorRemera";
    break;

  default:
    $mensaje="La remera es de un color desconocido";
    break;
}
echo "$mensaje";
 ?>
