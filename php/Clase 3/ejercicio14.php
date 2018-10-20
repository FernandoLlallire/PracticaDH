<!--14. Partiendo de un archivo con la siguiente variable definida:

$ceu = [

        "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]

];

Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu con el siguiente formato:

        Las ciudades de Argentina son:

    Buenos Aires
    Córdoba
    Santa Fé

        Las ciudades de Brasil son:

    Brasilia
    Rio de Janeiro
    Sao Pablo-->
<?php
$ceu = [
  "Argentina"=> ["Buenos Aires", "Córdoba", "Santa Fé"],
  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
  "Francia" => ["Paris", "Nantes", "Lyon"],
  "Italia" => ["Roma", "Milan", "Venecia"],
  "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
foreach ($ceu as $pais => $capitales) {
  echo "Las ciudades de $pais son:";
  echo "<ul>";
  foreach ($capitales as $elementoNoAsociativo => $nombreDeLaCapital) {
    echo "<li>$nombreDeLaCapital</li>";
  }
  echo "</ul>";
}
?>
