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

            <form method="post" action="cadastra.php">

                <div class="form-group">
                    <label class="control-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>

                <div class="form-group">
                    <label class="control-label">Preço</label>
                    <input type="text" class="form-control" name="preco">
                </div>

                <div class="form-group">
                    <label class="control-label">Categoria</label>
                    <select name="categoria_id" class="form-control">
                        <?php
                        $conexao = new mysqli('localhost', 'root', '', 'emerson');
                        $sql = "select * from categoria";

                        $query = $conexao->query($sql);

                        while ($resultado = $query->fetch_array()) {
                            ?>
                            <option value="<?php echo $resultado['id'] ?>">
                                <?php echo $resultado['nome']; ?>
                            </option>

                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Salvar">

                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>

            </form>

        </div>

    </body>
</html>

