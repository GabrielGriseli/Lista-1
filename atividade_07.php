<?php

    $sexo = 'm';
    $A = 1.69;
    
    if ($sexo == 'm'){
        $peso = (72.7 * $A) - 58;
        echo "$peso";
    }
    else{
        $peso = (62.1 * $A) - 44;
        echo "$peso";
    } 

?>
