<?php

declare(strict_types = 1); // tipado de datos

class Persona {
  public string $nombre = 'Desconocido';
  public string $pais = '';
  private int $edad = 0;  // normalmente, en vez de int, ponse DateTime

  function __construct (?string $nombre, ?int $edad) {  // o interrogante permite que ademais poida ter o valor null
    $this -> nombre = $nombre?? '';
    $this -> edad = $edad?? 0;
  }

  function __toString() {   // pasar a clase a string
    return join(',', [$this -> nombre, $this -> pais, $this -> edad]);
  }

  public function getEdad () : int {   // funcion para acceder a propiedade privada
    return $this -> edad;
  }
}


// $xurxo = new Persona(null, 49);
// $david = new Persona(null, null);

// $xurxo -> nombre = 'Xurxo'; // En js: xurxo.nombre
// $xurxo -> pais = 'España';
// // $xurxo -> edad = 49;
// var_dump($xurxo -> getEdad());  

// var_dump($xurxo);  
// var_dump($david);