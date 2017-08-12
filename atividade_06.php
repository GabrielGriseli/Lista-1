<?php
    
    $val_gas = 3.69;
    $val_alc = 3.9;
            
    $valor = $val_gas * 0.7;
    
    if ($valor > $val_alc)
        echo 'Abasteça com álcool';
    else
        echo 'Abasteça com gasolina';

?>
