<!--
Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.

Opcional: Ordenar la lista por el nombre del país.

        Ejemplo de output:
        La capital de Holanda es Amsterdam.
        La capital de Grecia es Atenas.
        La capital de Alemania es Berlín.-->
<?php
$ceu = array( 'Italia'=>'Roma', 'Luxembourg'=>'Luxembourg', 'Bélgica'=> 'Bruselas', 'Dinamarca'=>'Copenhagen', 'Finlandia'=>'Helsinki', 'Francia' => 'Paris', 'Slovakia'=>'Bratislava', 'Eslovenia'=>'Ljubljana', 'Alemania' => 'Berlin', 'Grecia' => 'Athenas', 'Irlanda'=>'Dublin', 'Holanda'=>'Amsterdam', 'Portugal'=>'Lisbon', 'España'=>'Madrid', 'Suecia'=>'Stockholm', 'Reino Unido'=>'London', 'Chipre'=>'Nicosia', 'Lithuania'=>'Vilnius', 'Republica Checa'=>'Prague', 'Estonia'=>'Tallin', 'Hungría'=>'Budapest', 'Latvia'=>'Riga', 'Malta'=>'Valletta', 'Austria' => 'Vienna', 'Polonia'=>'Warsaw') ;

ksort($ceu);// Lo que hacemos aca es ordenar la lista en order ascendete en funcion de los keys https://www.w3schools.com/php/php_arrays_sort.asp

foreach ($ceu as $pais => $capital) {
  echo "La capital de $pais es $capital<br>";
}
?>
