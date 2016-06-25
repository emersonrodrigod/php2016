<?php

$matriz = array();
$conta = 0;

for($i = 0; $i <= 100; $i++){
    $matriz[$i] = rand(0,10);
}

for($i = 0; $i <= 100; $i++){
    echo "Matriz[$i] = $matriz[$i] <br/>";
    
    if($matriz[$i] == 10){
        $conta++;
    }
}

echo "Total de numeros 10 = $conta";