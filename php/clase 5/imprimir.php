<?php
/*Recorda que siempre envia los datos del formulario en base al nombre y los id
los usamos para el tema del js*/
echo "<pre>";
var_dump (getallheaders());//http://php.net/manual/es/function.getallheaders.php
echo "<hr>";
var_dump($_SERVER);//$_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. Las entradas de este array son creadas por el servidor web
echo "<hr>";
var_dump($_FILES); //Un array asociativo de elementos subidos al script en curso a través del método POST. La estructura de este array se resume en la sección Subidas con el método POST. (http://php.net/manual/es/features.file-upload.post-method.php)
echo "<hr>";
var_dump($_REQUEST);//Un array asociativo que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.
echo "<hr>";
var_dump($_SESSION);//Es un array asociativo que contiene variables de sesión disponibles para el script actual. Ver la documentación de Funciones de sesión para más información sobre su uso.
echo "<hr>";
var_dump($_COOKIE);//Una variable tipo array asociativo de variables pasadas al script actual a través de Cookies HTTP.
echo "<hr>";
echo "<hr>";
var_dump($GLOBALS);//Es un array asociativo que contiene las referencias a todas la variables que están definidas en el ámbito global del script. Los nombres de las variables son las claves del array. 
echo "<hr>";
echo "</pre>";
if ($_GET) {
  echo "El elemento vino por GET<br>";
  foreach ($_GET as $key => $value) {
    if (!is_array($value)) {
      echo "\"$key\" tiene el valor \"$value\"<br>";
    }else {
      foreach ($value as $key2 => $value2) {
        echo "\"$key\" n° $key2 tiene el valor \"$value2\"<br>";
      }
    }
  }
} else{
  echo "El elemento vino por POST<br>";
  foreach ($_POST as $key => $value) {
    if (!is_array($value)) {
      echo "\"$key\" tiene el valor \"$value\"<br>";
    }else {
      foreach ($value as $key2 => $value2) {
        echo "\"$key\" n° $key2 tiene el valor \"$value2\"<br>";
      }
    }
  }
}
// lo unico q probamos aca es el tema de como obtener mediante get los datos que enviamos en la uri
// por ejemplo al llamar a este archivo del servidor lo hacemos mediante imprimir.php?nombre=Ana&apellido=Perez&email=anaperez@digitalhouse.com
?>
