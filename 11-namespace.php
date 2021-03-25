<?php
// En PHP los namespace son similares a los paquetes de JAVA
// En PHP dos clases no puden tener el mismo nombre pero con los namaspace si se puede
// los namespace debe ser lo primero que aparece en el archivo

require_once 'empleado.php';

echo "<br>";

class Empleado
{
  public function __construct()
  {
    echo "Desde el archivo de namaspace de PHP";
  }
}

$empleado = new Empleado();