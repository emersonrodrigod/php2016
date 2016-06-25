<?php

$nome = $_POST['nome'];
$extras = $_POST['extras'];
$faltas = $_POST['faltas'];

$saldo = $extras - $faltas;
$premio = 0;

if ($saldo > 0 && $saldo <= 10){
    $premio = 20;
}
elseif ($saldo > 10 && $saldo <= 20) {
    $premio = 40;
}
elseif ($saldo > 20 && $saldo <= 30) {
    $premio = 60;
}
elseif($saldo > 30 && $saldo <= 40){
    $premio = 80;
}
elseif($saldo > 40){
    $premio = 100;
}

echo "total de extras: $extras <br/>";
echo "total de faltas: $faltas <br/>";
echo "saldo final: $saldo <br/>";
echo "Premio: $premio";
