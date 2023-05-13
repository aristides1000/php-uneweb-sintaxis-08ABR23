<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP ordenamiento de arreglos</title>
</head>
<body>
  <?php
    /*
      sort(); - ordena los arreglos en orden ascendente
      rsort(); - ordena los arreglos en orden descendente
      asort(); - ordena los arreglos asociativos en orden ascendente, según el valor
      ksort(); - ordena los arreglos asociativos en orden ascendente, según el clave
      arsort(); - ordena los arreglos asociativos en orden descendente, según el valor
      krsort(); - ordena los arreglos asociativos en orden descendente, según el clave

    */

    $equipos = array("leones", "magallanes", "tiburones", "cardenales");
    sort($equipos);

    $alength = count($equipos);

    for ($i = 0; $i < $alength; $i++) {
      echo $equipos[$i];
      echo "<br>";
    }

    // sort() con numeros


    // rsort() con string


    // rsort() con numeros


    // asort() orden ascendente, según valor

    echo "<br>";
    echo "<br>";

    $edades = array("Petra" => "38", "Carlos" => "43", "Jose" => "12");
    asort($edades);

    foreach($edades as $x => $x_valor) {
      echo "key=" . $x . ", Value=" . $x_valor;
      echo "<br>";
    }

    // ksort(); - orden ascendente, según el clave


    //  arsort(); - orden descendente, según el valor


    //  krsort(); - orden descendente, según el clave
  ?>
</body>
</html>