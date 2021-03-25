<?php
// Para crear clases en PHP se utiliza la palabra reservada class
// Su nombre por convencion debe de ir en mayuscula y CamelCase

class MenuRestaurant {
  // En POO las variables se conocen como propiedades
  // Una propiedad contiene informacion que pertenece a un objeto
  // las propiedades tiene variables de acceso public o private
  // con public la hacemos disponible afuera y adentro de la clase
  public $nombre = 'Nombre del producto';
  public $precio = 0;

  // Las clases tambien pudeen tener funciones pero al estar en una clase se llaman metodos
  public function obtenerProductoNombre() {
    echo "El producto ".$this->nombre." tiene un precio de ".$this->precio;
  }

}

// Las clases permiten crear objetos al instanciarlo. Se usa la palabra new
// y se le asigna a una variable
$bebida = new MenuRestaurant();
// Para poder cambiar el valor de una propiedad debemos hacer uso de la sintaxis de flecha
// Esta sintaxis es exclusiva de los objetos de php
$bebida->nombre = 'Jugo de naranja';
$bebida->precio = 30;
// Para mostrar los datos
// echo $bebida->nombre;
// var_dump($bebida);
$bebida->obtenerProductoNombre();


$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de chocolate';
$postre->precio = 150;
$postre->obtenerProductoNombre();
// var_dump($postre);

$corte = new MenuRestaurant();
$corte->nombre = 'Rib Eye';
$corte->precio = 500;
$corte->obtenerProductoNombre();