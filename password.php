<?php

include_once './models/Password.php';

extract($_REQUEST);

$contrasena = new Password();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
</head>

<body>
  <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <label for="contraseña1"><strong>Contraseña 1</strong></label>
    <input type="text" name="contraseña1" value="<?= $contrasena->generarPassword()?>">
    <input type="text" name="fuerte1" value="
      <?php if ($contrasena->esFuerte()) {
        echo "Es fuerte";
      } else {
        echo "No es fuerte";
      }
      ?>">
    <br>
    <label for="contraseña2"><strong>Contraseña 2</strong></label>
    <input type="text" name="contraseña2" value="<?= $contrasena->generarPassword()?>">
    <input type="text" name="fuerte2" value="
      <?php if ($contrasena->esFuerte()) {
        echo "Es fuerte";
      } else {
        echo "No es fuerte";
      }
      ?>">
  </form>
</body>

</html>