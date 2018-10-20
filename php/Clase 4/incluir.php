<!-- Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.

Incluir en el archivo, saludo.php. ¿Qué sucede?
Reemplazar include por require. ¿Qué sucede?
Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede? -->
<?php
include_once "saludo.php"; //De esta manera solo incluye al archivo una sola vez!!!!
include_once "saludo.php"; //De esta manera solo incluye al archivo una sola vez!!!!
include_once "saludo.php"; //De esta manera solo incluye al archivo una sola vez!!!!

// Include tira un warning y sigue con la ejecucuon pero en require lo que hace es trulear todo.
echo "Soy incluir.PHP";
?>
