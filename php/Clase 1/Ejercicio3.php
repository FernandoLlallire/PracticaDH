<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true )
    {
        echo 'el valor ' . $varN . ' es verdadero.<hr>';
    }
    else
    {
        echo 'el valor ' . $varN . ' es falso.<hr>';
    }
}
echo "<br> la variable es $variable01";
var_dump($variable01);
tipoDato($variable01);
echo "<br> la variable es $variable02";
var_dump($variable02);
tipoDato($variable02);
echo "<br> la variable es $variable03";
var_dump($variable03);
tipoDato($variable03);
echo "<br> la variable es $variable04";
var_dump($variable04);
tipoDato($variable04);
echo "<br> la variable es $variable05";
var_dump($variable05);
tipoDato($variable05);
echo "<br> la variable es $variable06";
var_dump($variable06);
tipoDato($variable06);
echo "<br> la variable es $variable07";
var_dump($variable07);
tipoDato($variable07);
echo "<br> la variable es $variable08";
var_dump($variable08);
tipoDato($variable08);
echo "<br> la variable es $variable09";
var_dump($variable09);
tipoDato($variable09);
echo "<br> la variable es $variable10";
var_dump($variable10);
tipoDato($variable10);

?>
