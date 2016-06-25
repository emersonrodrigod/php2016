<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$soma = $a + $b;

echo "A + B = $soma <br>";
echo "C = $c <br>";

if($soma < $c){
    echo "A soma de A+B e menor que C";
}
else {
    echo "A soma de A+B e maior que C";
}
    

