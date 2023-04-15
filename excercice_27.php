<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
  <title>Operadores en PHP</title>
</head>
<body>
  <?php
    // tipos de operadores en PHP

    /*
      - operadores aritmeticos
      - operadores de asignación
      - operadores de comparación
      - Operadores de incremento y decremento
      - operadores  logicos
      - operadores de cadenas de caracteres
      - operadores de arreglos
      - operadores de asignaciòn condicional
    */

    // operadores aritméticos

    /* $x = 7;
    $y = 8;

    echo $x + $y;
    echo '<br>';
    echo $x - $y;
    echo '<br>';
    echo $x * $y;
    echo '<br>';
    echo $x / $y;
    echo '<br>';
    echo $x % $y;
    echo '<br>';
    echo $x ** $y; */

    // operadores de asignación

    /* echo '<br>';
    echo '<br>';
    echo $x = $y;
    echo '<br>';
    echo $x += $y; //$x = $x + $y
    echo '<br>';
    echo $x -= $y;
    echo '<br>';
    echo $x *= $y;
    echo '<br>';
    echo $x /= $y;
    echo '<br>';
    echo $x %= $y; */

    // Operadores de comparación

    // equal

    $x = 15;
    $y = 15;

    echo '<br>';
    var_dump($x == $y);

    // identical

    $x = '15';
    $y = 15;

    echo '<br>';
    var_dump($x === $y);

    // No es igual

    $x = 15;
    $y = 15;

    echo '<br>';
    var_dump($x != $y);

    // operador de nave espacial

    $x = 5;
    $y = 10;

    echo '<br>';
    echo ($x <=> $y); // retorna -1 debido a que $x es menor que $y0


    $x = 10;
    $y = 10;

    echo '<br>';
    echo ($x <=> $y); // retorna 0 debido a que $x es igual que la variable $y

    $x = 15;
    $y = 10;

    echo '<br>';
    echo ($x <=> $y); // retorna 1 debido a que $x es mayor que la variable $y

    // operadores de incremento y decremento en PHP

    // pre-incremento ++$x

    echo '<br>';
    $x = 15;
    echo ++$x;

    // post-incremento $x++

    echo '<br>';
    $x = 20;
    echo $x++;

    // pre-decremento --$x

    echo '<br>';
    $x = 20;
    echo --$x;

    // post-decremento $x--

    echo '<br>';
    $x = 15;
    echo $x--;

    // operadores lógicos

    // and

    $x = 19;
    $y = 15;

    if ($x == 19 and $y == 15) {
      echo '<br>';
      echo 'Buenas tardes';
    }

    if ($x == 19 and $y == 33) {
      echo '<br>';
      echo 'Buenas noches';
    }

    // or

    // xor

    // &&

    // ||

    // !

    // operadores de cadena de caracteres

    // operador .

    $texto1 = "Bonito ";

    $texto2 = "día";
    
    echo '<br>';
    echo $texto1 . $texto2;

    // operador .=

    $texto1 = "Felices ";

    $texto2 = "pascuas";

    echo '<br>';
    $texto1 .= $texto2;

    echo $texto1;

    //operadores de arreglos

    // +

    echo '<br>';
    $a = array('a' => 'rojo', 'b' => 'azul');
    $b = array('c' => 'verde', 'd' => 'amarillo');

    print_r($a + $b);

    $usuarios = array('nombre' => 'petra',
                      'apellido' => 'bastidas',
                      'altura' => 1.8);


    $colores = array('amarillo', 'verde', 'azul');

    echo '<br>';
    echo $usuario['altura'];

    echo '<br>';
    echo $colores[1];

    echo '<br>';

    // ==

    // ===

    // !=

    // <>

    // !==

    // operadores de asignacion condicional

    // ternario ? : 

    // si empty($usuario) = es verdadera, asigna $estatus = 'anonimo';

    echo $estatus = (empty($usuario)) ? "anonimo" : 'ingresó';
    echo("<br>");

    if ($usuario == null) {
      $estatus = 'anonimo';
      echo($estatus);
    } else {
      $estatus = 'ingresó';
      echo($estatus);
    }

    echo("<br>");
    echo $estatus = (!empty($usuario)) ? "anonimo" : 'ingresó';

    echo("<br>");

    $usuario = 'jose';
    echo $estatus = (empty($usuario)) ? "anonimo" : 'ingresó';

    echo("<br>");
    // operador ??

    // la variable uasuario tiene unn valor del $_GET['usuario']
    // y es 'anonimo' si no existe

    echo $usuario = $_GET["usuario"] ?? 'anonimo';
    echo '<br>';

    // la variable color es azul, si el color no existe o es nulo

    $color = 'verde';
    echo $color = $color ?? 'azul';
  ?>

  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' integrity='sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' integrity='sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ' crossorigin='anonymous'></script>
</body>
</html>