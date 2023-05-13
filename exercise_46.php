<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de Formularios en PHP</title>
</head>
<body>
<?php
    /*
      los variables super globales para capturar data en PHP son $_GET y $_POST
    */
  ?>

  <form action="bienvenida_get.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
</body>
</html>