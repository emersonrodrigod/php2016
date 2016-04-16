<?php

$idade = $_POST['idade'];

if($idade >= 18){
    echo "Voce tem $idade anos, portanto e maior de idade";
}else {
    echo "Voce tem $idade anos, portanto e menor de idade";
}

