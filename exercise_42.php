<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Variables globales - superglobales</title>
</head>
<body>
  <?php
    /*
      las variables globales son las siguientes

      - $GLOBALS
      - $_SERVER
      - $_REQUEST
      - $_POST
      - $_GET
      - $_FILES
      - $_ENV
      - $_COOKIE
      - $_SESSION
    
    */

    // PHP $GLOBALS

    $a = 45;
    $b = 89;

    function adicion() {
      $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }

    adicion();
    echo $c;

    echo "<br>";
    echo "<br>";

    // PHP superglobal - $_SERVER

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";

    // PHP $_REQUEST

    echo "<br>";
    echo "<br>";
  ?>

  <!-- <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form> -->

  <?php
    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_REQUEST['fname']);
      if (empty($name)) {
        echo "el nombre esta vacio";
      } else {
        echo $name;
      }
    } */
  ?>

  <!-- PHP $_POST -->

  <br>
  <br>

  <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname2">
    <input type="submit">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name2 = $_POST['fname2'];
      if (empty($name2)) {
        echo "el nombre esta vacio";
      } else {
        echo $name2;
      }
    }
  ?>

  <br>
  <br>

  <!-- PHP $_GET -->

  <a href="/php-sabado-aristides-08ABR23/php-sintaxis-aristides/exercise_43.php?name=pedro">Prueba Get</a>
</body>
</html>