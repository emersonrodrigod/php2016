<?php
session_start();
$codigo = $_GET['codigo'];

array_splice($_SESSION['alunos'], $codigo, 1);
header("location:index.php");





