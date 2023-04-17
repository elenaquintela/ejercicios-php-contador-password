<?php

declare(strict_types = 1); 

class Contador {
  private int $contador;

  function __construct (int $contador = 0) { 
    $this -> contador = $contador;
  }

  function getContador () {
    return $this -> contador;
  }
  
  function sumar () : void {
    $this -> contador ++;
  }

  function restar () : void{
    $this -> contador --;
  }

  function setContador ($nuevoContador) {
    $this -> contador = $nuevoContador;
  }
}

