<?php

//Conecta com o banco de dados
$conexao = new mysqli('localhost', 'root', '', 'emerson');

//recupera as variaveis digitadas pelo usuario
$nome = $_POST['nome'];
$id = $_POST['id'];

//define o comando sql para inserir no banco
$sql = "update categoria set nome = '$nome' where id = $id";

//executa a inserção
$query = $conexao->query($sql);

//testa se deu certo
if($query) {
    header('location:index.php');
}else {
    echo "Aconteceu algum erro";
}



