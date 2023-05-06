<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones en PHP</title>
</head>
<body>
  <?php
    // Las funciones pueden comenzar con letras y con piso, las función no tienen case-sensitive

    function escribirMensaje() {
      echo "Hola mundo";
    }

    escribirMensaje();

    echo "<br>";
    echo "<br>";

    function nombreFamilia($primerNombre) {
      echo "$primerNombre Perez. <br>";
    }

    nombreFamilia("josé");
    nombreFamilia("Maria");
    nombreFamilia("Pedro");
    nombreFamilia("Carmen");

    echo "<br>";
    echo "<br>";

    function nombreFamilia2($primerNombre, $anio) {
      echo "$primerNombre Perez. Nació en el año $anio<br>";
    }

    nombreFamilia2("josé", "1950");
    nombreFamilia2("Maria", "1960");
    nombreFamilia2("Pedro", "1970");
    nombreFamilia2("Carmen", "1980");

    echo "<br>";
    echo "<br>";

    function agregaNumero(int $a, int $b) {
      return $a + $b;
    }

    echo agregaNumero(5, "10 dias");

    echo "<br>";
    echo "<br>";
  ?>
</body>
</html>