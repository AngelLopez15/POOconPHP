<?php
// Los getters sirven para obtener un valor 
// Los setters sirven para añadir o modificar un valor
class MenuRestaurant
{

  public $nombre;
  public $precio;
  protected $categoria;

  public function __construct($nombre, $precio)
  {
    $this->nombre = $nombre;
    $this->precio = $precio;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function getCategoria()
  {
    return $this->categoria;
  }

  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;
  }
} //Clase principal Menu

class Postre extends MenuRestaurant
{
  protected $peso;

  public function __construct($nombre, $precio, $peso)
  {
    parent::__construct($nombre, $precio);
    $this->peso = $peso;
  }

  public function getPeso()
  {
    return $this->peso;
  }
}

$postre = new Postre("Pastel", 100, "1Kg");
$postre->setCategoria("Postre");
var_dump($postre);