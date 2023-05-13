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
    echo "<br>";
    echo "<br>";

    /* Arreglos asociativos u objetos */

    $edades = array("Carla" => "65", "Jose" => "35", "Pedro" => "15");

    foreach($edades as $x => $x_valor) {
      echo "Key=" . $x . " , Value=" . $x_valor;
      echo "<br>";
    }
  ?>
</body>
</html>