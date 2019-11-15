<?php

class Producto{
  private $foto;
  private $descripcion;
  private $precio;

public function getFoto(){
    return $this->foto;
  }

public function getDescripcion(){
    return $this->descripcion;
  }

public function getPrecio(){
  return $this->precio;
}

public function setFoto($foto){
    return $this->foto = $foto;
  }

  public function setDescripcion($descripcion){
    return $this->descripcion = $descripcion;
  }

public function setPrecio($precio){
  return $this->precio = $precio;
}


public function aniadirseACarrito ($carrito){
  return $this;
}











}










 ?>
