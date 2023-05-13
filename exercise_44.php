<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Expresiones regulares</title>
</head>
<body>
  <?php
    /*
      $expresion = "/caracas/i";

      ~ // virgulilla alt + 126

      - preg_match() // 1 si se encuentra el patron en la cadena de caracteres o 0 si no se encuentra

      - preg_match_all() // retorna el numero de veces en el cual el patron fue encontrado en la cadena de caracteres, y 0 si no fue ncontrado.

      - preg_replace() // retorna una nueva cadena de caracteres si hubo concordancia con el patron y es remplasado por la nueva cadena de caracteres.
    */

    // preg_match()

    echo "<br>";
    echo "<br>";

    $cadena = "Vamos al partido de beisbol";
    $patron = "/partido/i";
    echo preg_match($patron, $cadena); // salida 1

    echo "<br>";
    echo "<br>";

    $cadena2 = "Vamos al partido de beisbol";
    $patron2 = "/cancha/i";
    echo preg_match($patron2, $cadena2); // salida 0

    //preg_match_all()

    echo "<br>";
    echo "<br>";

    $cadena3 = "Vamos al partido de beisbol";
    $patron3 = "/a/i";
    echo preg_match_all($patron3, $cadena3); // salida 3

    //preg_replace()

    echo "<br>";
    echo "<br>";

    $cadena4 = "Vamos al partido de Beisbol";
    $patron4 = "/Beisbol/i";
    echo preg_replace($patron4, "Futbol", $cadena4); // salida Vamos al partido de Futbol

    /*
    [str]
    [^str]
    [0-9]

    // meta caracteres
    | // pipe
    */

    echo "<br>";
    echo "<br>";

    $cadena5 = "manzanas lechosas y papapayas";
    $patron5 = "/(pa){3}yas/i";
    echo preg_match($patron5, $cadena5); // retorna 1
  ?>
</body>
</html>