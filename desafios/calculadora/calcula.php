<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operador = $_POST['operador'];

if ($operador == '+') {
    $resultado = $valor1 + $valor2;
}

if ($operador == '-') {
    $resultado = $valor1 - $valor2;
}

if ($operador == '*') {
    $resultado = $valor1 * $valor2;
}

if ($operador == '/') {
    if ($valor2 == 0) {
        echo "Não´e possivel realizar uma divisao por zero";
    } else {
        $resultado = $valor1 / $valor2;
    }
}

if (isset($resultado)) {
    echo "$valor1 $operador $valor2 = $resultado";
}