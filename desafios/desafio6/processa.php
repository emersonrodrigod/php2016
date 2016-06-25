<?php

$frase = $_POST['frase'];
$repeticoes = $_POST['repeticoes'];

for($i = 1; $i <= $repeticoes; $i++ ){
    echo $frase . "<br/>";
}

