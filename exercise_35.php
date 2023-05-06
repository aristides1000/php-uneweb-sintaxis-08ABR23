<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bucle foreach</title>
</head>
<body>
  <?php
    $marcas = array("savoy", "mavesa", "amazon");

    foreach ($marcas as $valor) {
      echo "$valor <br>"; // interpolación
      echo $valor . ' <br>'; // concatenación
    }

    /* foreach ($marcas as $valor) {
      var_dump($marcas);
      echo "<br>";
    } */

    // foreach con objetos


    echo "<br>";
    $edades = array("Pedro"=>"40", "Juan"=>"25", "Maria" =>"55");

    foreach ($edades as $key => $valor) {
      echo "$key = $valor<br>";
    }
  ?>
</body>
</html>