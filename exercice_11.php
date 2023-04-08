<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
  <title>alcance local de una variable</title>
</head>
<body>
  <?php
    function miPrueba() {
      $x = 35; // alcance local
      echo "<p>La variable x dentro de esta funcion es: $x</p>";
    }

    function miPrueba2() {
      $x = 55; // alcance local
      echo "<p>La variable x dentro de esta funcion es: $x</p>";
    }
    miPrueba();
    miPrueba2();

    // Usar la variable x fuera de la función nos generará un error.
    echo "<p>El valor de la variable x fuera de la funcion es : $x</p>";
  ?>

  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' integrity='sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' integrity='sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ' crossorigin='anonymous'></script>
</body>
</html>