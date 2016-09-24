<?php

$conexao = new mysqli('localhost', 'root', '', 'emerson');

$id = $_GET['id'];

$sql = "delete from categoria where id = $id";

$query = $conexao->query($sql);

if($query){
    header('location:index.php');
}else {
    echo "aconteceu um erro";
}