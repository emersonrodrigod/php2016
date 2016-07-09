<?php
session_start();

$codigo = $_GET['codigo'];
?>
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

            <h3>Cadastro de Alunos</h3>

            <form method="post" action="processaEditar.php" class="col-md-6">
                <input type="hidden" name="id" value="<?php echo $codigo?>" />
                
                <div class="form-group">
                    <label class="control-label">Código</label>
                    <input type="text" class="form-control" name="codigo" value="<?php echo $_SESSION['alunos'][$codigo]['codigo']; ?>">
                </div>
                
                <div class="form-group">
                    <label class="control-label">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $_SESSION['alunos'][$codigo]['nome']; ?>">
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Salvar" class="btn btn-primary" />
                    
                    <a href="index.php" class="btn-danger btn">Cancelar</a>
                </div>
            </form>

        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
