<?php

declare(strict_types=1);

class Password
{
  private int $longitud;
  private string $contrasena;

  function __construct(int $longitud = 8)
  {
    $this->longitud = $longitud;
    $this->contrasena = $this->generarPassword();
  }

  function generarPassword(): string
  {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for ($contrasena = '', $n = strlen($caracteres) - 1; strlen($contrasena) < $this->getLongitud();) {
      $x = rand(0, $n);
      $contrasena .= $caracteres[$x];
    }
    return $contrasena;
  }

  function getLongitud(): int
  {
    return $this->longitud;
  }

  function getcontrasena(): string
  {
    return $this->contrasena;
  }

  function setLongitud(int $longitud)
  {
    $this->longitud = $longitud;
  }

  function esFuerte(): bool
  {
    $mayusculas = 0;
    $minusculas = 0;
    $numeros = 0;

    for ($i = 0; $i < strlen($this->contrasena); $i++) {
      if (ctype_upper($this->contrasena[$i])) {
        $mayusculas++;
      } else if (ctype_lower($this->contrasena[$i])) {
        $minusculas++;
      } else if (ctype_digit($this->contrasena[$i])) {
        $numeros++;
      }
    }
    return $mayusculas > 2 && $minusculas > 1 && $numeros > 5;
  }
}
