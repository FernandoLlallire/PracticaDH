<?php
$nombreDeUsuario="Admin";
$claveDeUsuario="1234";
if ($nombreDeUsuario=="Admin"&&$claveDeUsuario=="1234")
  echo "¡Bienvenido a tu cuenta!<br>";
else {
  echo "Lo sentimos, hay un error de credenciales<br>";
  if ($nombreDeUsuario!="Admin"&&$claveDeUsuario=="1234")
    echo "Error en usuario<br>";
  else if ($nombreDeUsuario=="Admin"&&$claveDeUsuario!="1234")
    echo "Error en el pass<br>";
  else echo "todo mal<br>";
}
 ?>
