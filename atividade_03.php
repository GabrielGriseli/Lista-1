<?php
    $A = 100;
    $B = 200;
    $C = 300;
    $D = 400;
    
    $soma = $A + $D;
    $divisao = $B / $C;
    
    if ($soma > $divisao)
        echo 'A soma é maior que a divisão';
    else if ($soma < $divisao)
        echo 'A soma é menor que a divisão';
    else
        echo 'A soma é igual a divisão';

?>
