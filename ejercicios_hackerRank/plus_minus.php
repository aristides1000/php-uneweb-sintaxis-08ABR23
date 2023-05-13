<?php
  function plusMinus($arr) {
    // Write your code here
    $positivos = $negativos = $ceros = 0;
    
    $n = count($arr);
    
    foreach ($arr as $x) {
        if ($x > 0) {
            $positivos++;
        } elseif ($x < 0) {
            $negativos++;
        } else {
            $ceros++;
        }
    }
    
    $resultado_positivo = floatval($positivos / $n);
    $resultado_negativo = floatval($negativos / $n);
    $resultado_cero = floatval($ceros / $n);
    
    echo number_format($resultado_positivo, 6, '.', '') . "\n" . number_format($resultado_negativo, 6, '.', '') . "\n" . number_format($resultado_cero, 6, '.', '');
  }
?>