<?php

$nome = $_POST['nome'];
$extras = $_POST['extras'];
$faltas = $_POST['faltas'];

$saldo = $extras - $faltas;
$premio = 0;

if($saldo > 0 and $saldo <= 10){
    $premio = 20;
}



echo "Premio = $premio";

