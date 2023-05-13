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

  <form method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="nombre"><br>
    E-mail: <input type="text" name="email"><br>
    Ciudad: <input type="text" name="ciudad"><br>
    Dirección: <textarea name="direccion" rows="10" cols="50"></textarea>
    Genero: 
    <input type="radio" name="genero" value="mujer">Mujer
    <input type="radio" name="genero" value="hombre">Hombre
    <input type="submit">
  </form>
</body>
</html>