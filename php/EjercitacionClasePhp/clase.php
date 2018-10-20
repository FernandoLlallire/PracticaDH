<?php
/**
 *
 */
class ProductoVendible
{

 private $producto;
 private $ingredientePrincipal;
 private $precio;
 private $atributo;

  public function __construct($obj){
  $this->datosFromProducto($obj);
 }
 public function getProducto(){
   $atributo=[];
   $atributo[]=$this->producto;
   $atributo[]=$this->ingredientePrincipal;
   $atributo[]=$this->precio;
   return $atributo;
 }
private function datosFromProducto($producto){
  switch ($producto) {
    case 'obj1':
      $this->producto="hamburgesa";
      $this->ingredientePrincipal=["carne","pan"];
      $this->precio=100;
      break;
    case 'obj2':
      $this->producto="papas";
      $this->ingredientePrincipal="papa";
      $this->precio=110;
      break;
    case 'obj3':
      $this->producto="ensalada";
      $this->ingredientePrincipal=["lechuga","tomate"];
      $this->precio=120;
      break;
    case 'obj4':
      $this->producto="bebida";
      $this->ingredientePrincipal="gaseosa";
      $this->precio=130;
      break;
    case 'obj5':
      $this->producto="factura";
      $this->ingredientePrincipal="medialuna";
      $this->precio=140;
      break;
    case 'obj6':
      $this->producto="cafe";
      $this->ingredientePrincipal=["Grano De Cafe","leche"];
      $this->precio=150;
      break;
  }
}
}
 ?>
