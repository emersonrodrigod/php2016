<?php

session_start();

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];

$_SESSION['alunos'][$id]['codigo'] = $codigo;
$_SESSION['alunos'][$id]['nome'] = $nome;

header("location:index.php");
