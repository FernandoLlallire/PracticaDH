<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
  </head>
  <body>
    <?php
    $animales=["liebre","perro","mono","delfin","oso"];
    var_dump($animales);
    $animales[]="pajaro";
    $animales[]="cocodrilo";
    echo "<br>";
    var_dump($animales);
    echo "Me gustan los animales: ";
    foreach ($animales as $value) {
      echo "$value ";
    }
    $animales[0]="rino";
    echo "<br>Me gustan los animales: ";
    foreach ($animales as $value) {
      echo "$value ";
    }
    $animales[100]="vaca";
    echo "<br>Me gustan los animales: ";
    foreach ($animales as $value) {
      echo "$value ";
    }
    var_dump($animales);
    $animales[16]="pato";
    echo "<br>Me gustan los animales: ";
    foreach ($animales as $value) {
      echo "$value ";
    }
    var_dump($animales);
    ?>
  </body>
</html>
