<?php

$matrizA = array();
$matrizB = array();
$matrizC = array();
$matrizD = array();

//Preenchendo valores de A,B e C 
for($i = 1; $i <= 5; $i++){
    $matrizA[$i] = rand(0,100);
    $matrizB[$i] = rand(0,100);
    $matrizC[$i] = rand(0,100);
}

//juntar matrizA na matrizD
for($i = 1; $i <= 5; $i++){
    $matrizD[$i] = $matrizA[$i];
}

//juntar matrizB na matrizD
for($i = 6; $i <= 10; $i++){
    $matrizD[$i] = $matrizB[$i - 5];
}

//juntar matrizC na matrizD
for($i = 11; $i <= 15; $i++){
    $matrizD[$i] = $matrizC[$i - 10];
}

for($i= 1; $i <= 15; $i++){
    echo $matrizD[$i] . "<br/>";
}