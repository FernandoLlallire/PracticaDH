<?php
$faq = [
  ["pregunta"=>"Cuanto es 1+1","respuesta"=>"2"],
  ["pregunta"=>"Cuanto es 2+2","respuesta"=>"4"],
];
$color = ["verde","amarillo","rojo"];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php foreach ($faq as $value): ?>
       <p>Pregunta: <?= $value["pregunta"]  ?></p>
       <p>Respuesta: <?= $value["respuesta"] ?></p>
       <br>
     <?php endforeach; ?>
     <br><br><br><br><br>
<b><?= implode(",",$color) ?></b>
     <br><br><br><br><br>
     <ul>
       <?php foreach ($color as $value): ?>
         <li><?= $value ?></li>
       <?php endforeach; ?>
     </ul>
   </body>
 </html>
