<?php

// Para acceder o restringir el acceso a ciertos valores se tiene los modificadores
// public - Se puede accederen cualquier lugar en la clase o en el objeto.
// protected - Solo se puede acceder unicamente en la clase
// private - No puede ser accedida por los hijos, solo puede ser accedida por la clase que lo tiene

class MenuRestaurant {

  public $nombre;
  public $precio;
  private $direccion= "Av. Siempre Viva";

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

  public function getDirecion() {
    return $this->direccion;
  }
} //Clase principal Menu

class Bebida extends MenuRestaurant {
  public $medida;

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
  protected $peso;

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

$bebida = new Bebida("Cerveza", 50, "1lt");
// Accediendo a los atributos del objeto que son publicos
echo $bebida->nombre;
echo "<br>";
$postre = new Postre("Pastel", 100, "1Kg");
// Para acceder a un atributo protegido solo se puede por medio de un gettter 
echo $postre->getNombre();
echo "<br>";
// Accediendo a un atributo private
$retaurant = new MenuRestaurant("La torta", 500);
echo $retaurant->getDirecion();
