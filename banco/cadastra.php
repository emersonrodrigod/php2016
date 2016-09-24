<?php

//Conecta com o banco de dados
$conexao = new mysqli('localhost', 'root', '', 'emerson');

//recupera as variaveis digitadas pelo usuario
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$categoria_id = $_POST['categoria_id'];

//define o comando sql para inserir no banco
$sql = "insert into produtos values(null,'$nome',$preco, $categoria_id)";

//executa a inserção
$query = $conexao->query($sql);

//testa se deu certo
if($query) {
    header('location:index.php');
}else {
    echo "Aconteceu algum erro";
}

