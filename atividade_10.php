<?php
    
    $valor1 = 100;
    $valor2 = 200;
    
    if ($valor1 > $valor2){
        $aux = $valor1;
        $valor1 = $valor2;
        $valor2 = $aux;
    }
    
    for ($valor1++ ;$valor1 < $valor2; $valor1++)
        echo "$valor1 ";

?>

