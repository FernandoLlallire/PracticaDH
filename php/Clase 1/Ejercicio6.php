<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejericio 6</title>
  </head>
  <body>
    <?php
      $decimal= 1.25;
      $entero= 5;
      echo "La suma de ($decimal+$entero) es= ". ($decimal+$entero);
      echo "<br>La resta de ($decimal-$entero) es= ". ($decimal-$entero);
      echo "<br>La multiplicacion de ($decimal*$entero) es= ". ($decimal*$entero);
      echo "<br>La division de ($decimal/$entero) es= ". ($decimal/$entero);
      echo "<br>La division de ($entero/$decimal) es= ". ($entero/$decimal);
      $div1=$decimal/$entero;
      $div2=$entero/$decimal;
      echo "<pre>";
      echo "<br>La division de ($decimal/$entero) es= ";
      var_dump($div1);
      echo "<br>La division de ($entero/$decimal) es= ";
      var_dump($div2);
      echo "<pre>";
      $entero++;
      echo "<br>entrero++ ";
      var_dump($entero);
      echo "<pre>";
      $decimal++;
      echo "<br>decimal++";
      var_dump($decimal);
      echo "<pre>";
      $entero+=5;
      echo "<br>entero+=5 ";
      var_dump($entero);
      echo "<pre>";
      $decimal-=0.6;
      echo "<br>decimal-=0.6 ";
      var_dump($decimal);
      echo "<pre>";
      $resultado=($entero*2+$decimal)/($entero/2);
      echo "<br>resultado=(entero*2+decimal)/(entero/2) ";
      var_dump($resultado);
      echo "<pre>";
     ?>
  </body>
</html>
