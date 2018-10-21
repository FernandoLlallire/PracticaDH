<?php  if($_POST){
  $nombre = !empty($_POST["name"]) ? $_POST["name"]:"usuario sin asignar";
  $pais = !empty($_POST["pais"]) ? $_POST["pais"]:"Pais sin asignar";
  $email = !empty($_POST["email"]) ? $_POST["email"]:"email sin asignar";
  $pasatiempo = $_POST["pasatiempos"] ?? [];
  $paises = [
  "" => "",
  "ar" => "argentina",
  "ur" => "uruguay",
  "pe" => "peru",
  "br" => "brasil",
  "mx" => "mexico",
  "eu" => "yankiland",
  "jp" => "japon",
  "ta" => "tailand",
  "ru" => "mother rusia",
  "es" => "españa",
];
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confimation</title>
  </head>
  <body>
    <p>Muchas Gracias por registrarte <i><?= $nombre  ?></i>, nos has dicho que tu país de nacimiento es <i><?= $paises[$pais] ?></i>. Hemos registrado tu email: <i><?= $email ?></i>.</p>
    <p>Tus pasatiempos son:
      <?=  empty($pasatiempo) ? "No espcifico pasatiempos" : implode(",",$pasatiempo)?>
    <p>¡Gracias!</p>
  </body>
</html>
