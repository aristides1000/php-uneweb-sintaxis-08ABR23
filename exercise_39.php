<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP arreglos</title>
</head>
<body>
  <?php
    $playas = array("Los Angeles", "patanemo", "Los Corales");

    echo "Me gustan las playas de " . $playas[0] . " , " .$playas[1] . " y " . $playas[2] . ".";

    // tipos de arreglos en PHP

    /*
      - arreglos indexados
      - arreglos asociativos u objetos
      - arreglos mltidimencionales
    */

    // para saber la longuitud de un arreglo hacemos uso del método count

    echo "<br>";
    echo "<br>";

    $aviones = array("boeing", "airbus", "f-16");
    echo count($aviones);

    echo "<br>";
    echo "<br>";

    echo rand(1,5);
  ?>
</body>
</html>