<?php

include_once './models/Contador.php';


$contador = new Contador($_REQUEST['salida'] ?? 0);

extract($_REQUEST);

if (isset($sumar)) {      // 'sumar' é o nombre do button
  $contador->sumar();
} 

if (isset($restar)) {
  $contador->restar();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador</title>
</head>

<body class="body">
  <form method="post" id="myForm" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">

    <button name="sumar">+</button>
    <button name="restar">-</button>

    <input name="salida" type="hidden" value="<?= $contador->getContador(); ?>">
    <?= $contador->getContador(); ?>

  </form>
</body>

</html>