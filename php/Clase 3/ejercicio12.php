<!--       Recorrer los valores del array con un foreach imprimiendo (como ejemplo):

animal: perro

edad: 5

altura: 0,60

nombre: Sonic-->
<?php
$mascota=[
  "animal" => "Perro",
  "edad" => 7,
  "altura" => 1,
  "nombre" => "Tony",
];
foreach ($mascota as $nombreContenedor => $elementoContenido) {
  echo $nombreContenedor.": ".$elementoContenido."<br>";
}
 ?>
