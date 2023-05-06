<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones en PHP</title>
</head>
<body>
  <?php
    /* function agregaNumero(int $a, int $b) {
      return $a + $b;
    }

    echo agregaNumero(5, "10 dias"); */

    function colocarPeso(int $pesoMinimo = 50) {
      echo "El peso es: $pesoMinimo <br>";
    }

    colocarPeso(78);
    colocarPeso();
    colocarPeso(90);
    colocarPeso(120);

    echo "<br>";
    echo "<br>";

    function suma(int $a, int $b) {
      $c = $a + $b;
      return $c;
    }

    echo "2 + 2 = " . suma(2, 2) . "<br>";
    echo "3 + 5 = " . suma(3, 5) . "<br>";
    echo "8 + 12 = " . suma(8, 12) . "<br>";

    echo "<br>";
    echo "<br>";

    function resta(float $a, float $b) : float {
      return $a - $b;
    }

    echo "15.5 + 13.2 = " . resta(15.5, 13.2) . "<br>";

    echo "<br>";
    echo "<br>";

    function multiplicacion(float $a, float $b) : int {
      return(int)($a * $b);
    }

    echo "15.561 * 13.223 = " . multiplicacion(15.561, 13.223) . "<br>";

    echo "<br>";
    echo "<br>";

    function sumaDiez(&$valor) {
      $valor += 10;
    }

    $numero = 15;

    sumaDiez($numero);

    echo $numero;
  ?>
</body>
</html>