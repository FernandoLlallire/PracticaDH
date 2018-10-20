<?php
require_once("clase.php");
$miclase = new ProductoVendible($_GET["objeto"]);
echo $_GET["objeto"];
var_dump ($miclase->getProducto() );
 ?>
