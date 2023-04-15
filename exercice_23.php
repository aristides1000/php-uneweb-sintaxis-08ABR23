<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
  <title>Funciones de las cadenas de caracteres de php</title>
</head>
<body>
  <?php
    // Retorna el tamaño de una cadena de caracteres
    echo strlen('Hola mundo!');
    echo '<br>';

    // str_word_count() - cuenta las palabras en una cadena de caracteres

    echo str_word_count('Buenas tardes!');

    // strrev() - coloca en sentido contrario los caracteres de una cadena de caracteres

    echo '<br>';
    echo strrev("Buenas noches!");

    //strpos() busca un texto en una cadena de caracteres

    echo '<br>';
    echo strpos('Buenos dias', 'dias'); // salida 7
    echo strpos('Buenos dias', 'noches'); // FALSE

    // str_replace() reemplaza un texto en una cadena de caracteres.

    echo '<br>';
    echo str_replace('tardes', 'noches', 'Buenas tardes'); // salida Buenas noches

    
  ?>

  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' integrity='sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' integrity='sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ' crossorigin='anonymous'></script>
</body>
</html>