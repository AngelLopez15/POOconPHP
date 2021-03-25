<?php
// Un constructor es una funcion que se ejecuta automaticamente
// en el momento que se crea un objeto con una clase
class MenuRestaurant {

  public $nombre = 'Nombre del producto';
  public $precio = 0;
  public $categoria;

  // El constructor se define con dos guiones bajos y la palabra reservada construct
  // Pasandole los parametros que necesita el objeto para que se pueda hacer una instancia
  // del mismo y poder usarlo.
  public function __construct($nombre, $precio, $categoria)
  {
    // echo "Me ejecuto automaticamente desde el constructor";
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->categoria = $categoria;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getPrecio() {
    return $this->precio;
  }

  public function getCategoria() {
    return $this->categoria;
  }

}

$bebida = new MenuRestaurant("Jugo de Uva", 50, "Bebidas");
echo $bebida->getNombre();
echo "<br>";
echo $bebida->getPrecio();
echo "<br>";
echo $bebida->getCategoria();