<?php
session_start();

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];

$aluno = array(
    'codigo' => $codigo,
    'nome' => $nome
);

$_SESSION['alunos'][] = $aluno;
header('location:index.php');

