<?php

$nota1 = 90;
$nota2 = 90;
$media = ($nota1 + $nota2) / 2;

//if é igual ao se do excel
if ($media >= 70) {
    if ($media >= 90) {
        echo "Aprovado parabéns";
    }else {
        echo "Aprovado, mas pode melhorar";
    }
} else {

    echo "reprovado";
}



