<?php
// Las interfaces son plantillas para las clases
// NOTA: No es recomendable poner mucha logica dentro de una interfaz
// Las interaces solo funcionan con los metodos.
// Las interfaces mas para cuando se hacen conecciones a la base de datos

interface RestauranteInterface
{
  public function getNombre();
  // En las interfaces tambien podemos indican el valor que deben retornar los metodos
  // No hace type checkint pero si revisa que se cumpla la estructura de la interfaz
  public function getPrecio() : int;

  public function setPrecio($precio);
}

// Para conectar la interface con la clase debemos usar la palabra implements
class MenuRestaurant implements RestauranteInterface{

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

  public function getPrecio() : int {
    return $this->precio;
  }

  public function setPrecio($precio) {
    return $this->precio;
  }
} //Clase principal Menu