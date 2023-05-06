<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Break y Continue</title>
</head>
<body>
  <?php
    for ($x = 0; $x < 50; $x+=5) {
      if ($x == 25) {
        break;
      }

      echo "El número es: $x <br>";
    }

    echo "<br>";
    echo "<br>";

    //continue

    for ($x = 0; $x < 50; $x+=5) {
      if ($x == 25) {
        continue;
      }

      echo "El número es: $x <br>";
    }

    // break y continue en bucles while

    echo "<br>";
    echo "<br>";


    $y = 0;

    while ($y < 20) {
      if ($y == 10) {
        break;
      }

      echo "El número es: $y <br>";

      $y += 2;
    }

    echo "<br>";
    echo "<br>";

    $y = 0;

    while ($y < 30) {
      if ($y == 12) {
        $y += 3;
        continue;
      }
      echo "El número es: $y <br>";

      $y += 3;
    }
  ?>
</body>
</html>