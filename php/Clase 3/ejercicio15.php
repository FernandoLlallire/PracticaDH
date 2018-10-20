<!--15. A partir del ejercicio anterior:

    Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano. Este valor debe ser true o false.
    Hacer que la impresión anterior no muestre países que no sean Americanos.-->

<?php
$ceu = [
  "Argentina"=> ["provincia"=>["Buenos Aires", "Córdoba", "Santa Fé"],"esAmericano"=>true],
  "Brasil" => ["provincia"=>["Brasilia", "Rio de Janeiro", "Sao Pablo"],"esAmericano"=>true],
  "Colombia" => ["provincia"=>["Cartagena", "Bogota", "Barranquilla"],"esAmericano"=>true],
  "Francia" => ["provincia"=>["Paris", "Nantes", "Lyon"],"esAmericano"=>false],
  "Italia" => ["provincia"=>["Roma", "Milan", "Venecia"],"esAmericano"=>false],
  "Alemania" => ["provincia"=>["Munich", "Berlin", "Frankfurt"],"esAmericano"=>false],
];
foreach ($ceu as $pais => $capitalesAndBooleanoAmericano) {
  if($capitalesAndBooleanoAmericano["esAmericano"]){
    echo "Las ciudades de $pais son:";
    echo "<ul>";
    foreach ($capitalesAndBooleanoAmericano["provincia"] as $provincia) {
      echo "<li>$provincia</li>";
    }
  echo "</ul>";
  }
}
?>
