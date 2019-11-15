<?php
inlclude_once (producto.php);


class Carrito {
private $producto;

  public function getProducto(){
    return $this->producto;
  }

  public function setProducto($producto){
      return $this->producto = $producto;
    }


public function aniadirProducto(){
  return $this;
}





}









 ?>
