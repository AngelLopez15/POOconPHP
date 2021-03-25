<?php
// Una clase abstrata es una clase que no se puede instanciar
// pero que sirve como base para otras clases
// Solo necesitamos poner la palabra abstract
abstract class MenuRestaurant {

  public $nombre;
  public $precio;

  public function __construct($nombre, $precio)
  {
    $this->nombre = $nombre;
    $this->precio = $precio;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getPrecio() {
    return $this->precio;
  }
} //Clase principal Menu

class Postre extends MenuRestaurant {
  public $peso;

  public function __construct($nombre, $precio, $peso)
  {
    parent::__construct($nombre, $precio);
    $this->peso = $peso;
  }

  public function getPrecio() {
    return "El precio de este postre es: " . $this->precio;
  }

  public function getPeso() {
    return $this->peso;
  }
}

$postre = new Postre("Pastel tres leches", 100, "1Kg");
var_dump($postre);