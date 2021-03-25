<?php
// los metodos estaticos no requieren que se instancie la clase y
// se puden acceder directamente a ellos por medio del nombre de la clase en lugar 
// de crear un objeto. Para hacerlo usamos las palabras reservadas "public static"

// generalmente usados en conexiones a base de datos

class DB
{
  public static function conectarDB()
  {
    echo "Conectando a la base de datos";
  }
}

// Al ser un metodo statico NO necesitamos instanciarlo con new
DB::conectarDB();
echo "<br>";

class Email
{
  public static function enviarEmail()
  {
    echo "Enviando Email...";
  }
}

Email::enviarEmail();