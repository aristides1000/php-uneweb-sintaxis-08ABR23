<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array_walk array_walk_recursive</title>
</head>
<body>
  <?php
    $array2 = [[3, 4, 5],
              [7, 5, 9],
              [1, 3, 2]];// |(3+5+2)-(5+5+1)| = 1

    $array3 = [[3, 4, 5, 3, 6],
              [7, 5, 9, 6, 7],
              [1, 3, 2, 9, 7],
              [1, 3, 2, 9, 7],
              [1, 3, 2, 9, 7]];

    function mostrar_elementos ($n, $key){
      echo "<br>";
      echo $n;
    }

    function mostrar_elementos2 ($n, $key){
      echo "<br>";
      var_dump($n);
    }

    $i = 0;
    $j = 0;

    function mostrar_elementos3 ($n, $key){
      /*
        Queremos imprimir un mensaje con la posición del elemento del array interno y el valor de esa iteración también muestra la iteración
      */
      global $i, $j;
      echo "<br>";
      
      echo "En la posición \$array[$j][$key] el valor de la variable es $n y la iteración es la $i";
      $i++;
      if($key == 0) {
        $j++;
      }
    }

    array_walk($array2, "mostrar_elementos2");
    echo "<br>";
    array_walk_recursive($array2, "mostrar_elementos"); 
    echo "<br>";
    array_walk_recursive($array2, "mostrar_elementos3");
  ?>
</body>
</html>