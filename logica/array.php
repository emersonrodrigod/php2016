<?php

$matriz = array();

//laço para preencher os dados
for($i =0; $i<=1000; $i++){
    $matriz[$i] = rand(0, 5000);
}

//laço para mostrar a matriz
for($i =0; $i<=1000; $i++){
   echo "matrix[$i] = $matriz[$i]<br/>";
}



