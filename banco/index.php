<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            
            <a href="incluir.html" class="btn btn-primary">Novo Produto</a>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexao = new mysqli('localhost', 'root', '', 'emerson');
                    $sql = "select * from produtos";

                    $query = $conexao->query($sql);

                    while ($resultado = $query->fetch_array()) {
                        ?>

                        <tr>
                            <td><?php echo $resultado['id']; ?></td>
                            <td><?php echo $resultado['nome']; ?></td>
                            <td><?php echo $resultado['preco']; ?></td>
                            <td>
                                <a class="btn btn-danger btn-xs" href="excluir.php?id=<?php echo $resultado['id']; ?>">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
