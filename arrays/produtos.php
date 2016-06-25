<?php
/*
  codigo, nome, quantidade, valor
 */

$produtos = array();

$produtos[0] = array(
    'codigo' => 1000,
    'nome' => 'CocaCola',
    'quantidade' => 500,
    'valor' => 5.00
);

$produtos[1] = array(
    'codigo' => 2000,
    'nome' => 'Guarana antartica',
    'quantidade' => 300,
    'valor' => 4.00
);

$produtos[2] = array(
    'codigo' => 5000,
    'nome' => 'Produto teste',
    'quantidade' => 300,
    'valor' => 4.00
);
?>

<table border="1">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>
        <td>quantidade</td>
        <td>Valor</td>
    </tr>

<?php
for ($i = 0; $i < count($produtos); $i++) {
    echo "<tr>";
    echo "<td>". $produtos[$i]['codigo'] . "</td>";
    echo "<td>". $produtos[$i]['nome'] . "</td>";
    echo "<td>". $produtos[$i]['quantidade'] . "</td>";
    echo "<td>". $produtos[$i]['valor'] . "</td>";
    echo "</tr>";
}
?>
</table>


