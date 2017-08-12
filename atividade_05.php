<?php

    $nota1 = 7.0;
    $nota2 = 0.0;
    $nota3 = 10.0;
    $nota4 = 9.0;
    
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    
    if ($media >= 7)
        echo 'Aluno aprovado';
    else if ($media < 7 && $media >= 5)
        echo 'Aluno em recuperação';
    else
        echo 'Aluno reprovado';

?>

