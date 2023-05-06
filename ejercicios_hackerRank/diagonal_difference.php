<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diagonal_difference</title>
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
              [1, 3, 2, 9, 7]];// |(3+5+2+9+7)-(6+6+2+3+1)| = |26 - 18| = 8

    function diagonal_difference($array) {
      $primera_diagonal = 0;
      $segunda_diagonal = 0;

      for($i = 0; $i < count($array); $i++) {
        $primera_diagonal += $array[$i][$i];
        for($j = 0; $j < count($array); $j++) {
          if($i + $j == count($array) - 1) {
            $segunda_diagonal += $array[$i][$j];
          }
        }
      }

      return abs($primera_diagonal - $segunda_diagonal);
    }

    echo "<br>";
    echo diagonal_difference($array2);
    echo "<br>";
    echo diagonal_difference($array3);
  ?>
</body>
</html>