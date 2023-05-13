<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .error {
      color: red;
    }
  </style>
  <title>Manejo de Formularios y su validación en PHP</title>
</head>
<body>
<?php
    /*
      los variables super globales para capturar data en PHP son $_GET y $_POST
    */

    // Vamos a definir las variables y vamos a colocarles valores vacios

    $nombre = $email = $ciudad = $direccion = $genero = "";
    $errorNombre = $errorEmail = $errorGenero = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nombre"])) {
        $errorNombre = "El nombre es requerido";
      } else {
        $nombre = prueba_input($_POST["nombre"]);
      }

      if (empty($_POST["email"])) {
        $errorEmail = "El email es requerido";
      } else {
        $email = prueba_input($_POST["email"]);
      }

      if (!empty($_POST["ciudad"])) {
        $ciudad = prueba_input($_POST["ciudad"]);
      }

      if (!empty($_POST["direccion"])) {
        $direccion = prueba_input($_POST["direccion"]);
      }

      if (empty($_POST["genero"])) {
        $errorGenero = "El genero es requerido";
      } else {
        $genero = prueba_input($_POST["genero"]);
      }
    }

    function prueba_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

  <h1>Ejemplo de validación de formularios en PHP</h1>
  <p><span class="error">* campo requerido</span></p>
  <form method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?= $errorNombre ?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?= $errorEmail ?></span>
    <br><br>
    Ciudad: <input type="text" name="ciudad"><br><br>
    Dirección: <textarea name="direccion" rows="10" cols="50"></textarea>
    <br><br>
    Genero: 
    <input type="radio" name="genero" value="mujer">Mujer
    <input type="radio" name="genero" value="hombre">Hombre
    <span class="error">* <?= $errorGenero ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    echo "<h2>Tus entradas:</h2>";
    echo $nombre;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $ciudad;
    echo "<br>";
    echo $direccion;
    echo "<br>";
    echo $genero;
  ?>
</body>
</html>