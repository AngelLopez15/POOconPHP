<?php

// Los getters son los mismo que un metodo que nos permite acceder a
// las propiedades del objeto

// Usualmente los getters No imprimen solo retornan un valor
// Usualmente se crea un getter para cada uno de las propiedades

class MenuRestaurant {

  public $nombre = 'Nombre del producto';
  public $precio = 0;

  public function getNombre() {
    return $this->nombre;
  }

  public function getPrecio() {
    return $this->precio;
  }

}

$bebida = new MenuRestaurant();

$bebida->nombre = 'Jugo de naranja';
$bebida->precio = 30;
echo $bebida->getNombre();
echo "<br>";
echo $bebida->getPrecio();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de chocolate';
$postre->precio = 150;
echo $postre->getNombre();
echo "<br>";
echo $postre->getPrecio();

