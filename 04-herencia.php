<?php

// Para manejar la herencia ocuparemos la clase Menu Restaurante como
// La clase principal

class MenuRestaurant {

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

// Para aplicar la herencia se ocupa la palabra reservada extends
class Bebida extends MenuRestaurant {
  public $medida;

  // Para heredar el constructor ocupamos la palabra reservada parent 
  public function __construct($nombre, $precio, $medida)
  {
    parent::__construct($nombre, $precio);
    $this->medida = $medida;
  }

  public function getMedida() {
    return $this->medida;
  }
} //Clase Bebida

class Postre extends MenuRestaurant {
  public $peso;

  public function __construct($nombre, $precio, $peso)
  {
    parent::__construct($nombre, $precio);
    $this->peso = $peso;
  }

  // Si requerimos que el mismo metodo haga una cosa distinta debemos
  // sobrecargar los metodo del padre (sobreescribirlo en el hijo)
  // Para reescribirlos se deben de llamar igual
  // tambien se pueden sobreescribir atributos
  public function getPrecio() {
    return "El precio de este postre es: " . $this->precio;
  }

  public function getPeso() {
    return $this->peso;
  }
}

$bebida = new Bebida("Cerveza", 50, "1lt");
echo $bebida->getNombre();
echo "<br>";
echo $bebida->getPrecio();
echo "<br>";
echo $bebida->getMedida();
echo "<br>";
$postre = new Postre("Chocoflan", 100, "1Kg");
echo $postre->getNombre();
echo "<br>";
echo $postre->getPrecio();
echo "<br>";
echo $postre->getPeso();
