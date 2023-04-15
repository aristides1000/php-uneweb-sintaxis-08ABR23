<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
  <title>numeros en php</title>
</head>
<body>
  <?php
    // enteros en php

    $x = 123;
    var_dump(is_int($x));
    echo '<br>';

    $x = 12.34;
    var_dump(is_int($x));

    echo '<br>';
    $x = 12.34;
    echo "el número $x ciertamente es flotante ";
    var_dump(is_float($x));

    echo '<br>';
    $x = 1.9e411;
    var_dump($x);

    // php NaN

    // NaN es Not a Number, no es un número

    echo '<br>';
    $x = acos(8);
    var_dump($x);

    // cadena de caracteres numericos

    echo '<br>';
    $x = 1234;
    var_dump(is_numeric($x));

    echo '<br>';
    $x = '1234';
    var_dump(is_numeric($x));

    echo '<br>';
    $x = '59.85' + 300;
    var_dump(is_numeric($x));

    echo '<br>';
    $x = 'Buenas noches';
    var_dump(is_numeric($x));

    echo '<br>';
    // cambiar tipo de dato de coma flotante a entero
    $x = 1234.5678;
    $int_cast = (int)$x;
    echo $int_cast;

    echo '<br>';

    // cambiar tipo de dato de una cadena de caracteres a un entero
    $x = '1234.5678';
    $int_cast = (int)$x;
    echo $int_cast;
  ?>

  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' integrity='sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' integrity='sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ' crossorigin='anonymous'></script>
</body>
</html>