<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bucle for</title>
</head>
<body>
  <?php
    for($x = 0; $x <= 5; $x++) {
      echo "el número es: $x <br>";
    }

    echo "<br>";

    for($x = 0; $x <= 500; $x+=50) {
      echo "El número es: $x <br>";
    }
  ?>
</body>
</html>