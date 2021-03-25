<?php
// Para definir una constante se ocupa la palabra reservada const

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

  // Definir constantes Deben estar escritas todas en mayusculas
  const CON_CREMA = 1;
  const SIN_CREMA = 0;

  public function __construct($nombre, $precio, $peso)
  {
    parent::__construct($nombre, $precio);
    $this->peso = $peso;
  }

  public function getPeso()
  {
    return $this->peso;
  }
}//Clase Postre

// Para acceder a una variable
echo Postre::CON_CREMA;
echo "<br>";
echo Postre::SIN_CREMA;