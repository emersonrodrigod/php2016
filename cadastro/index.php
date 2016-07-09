<?php session_start(); ?>
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

            <a href="formulario.html" class="btn btn-primary">Novo Aluno</a>
            <br/>
            <br/>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if (isset($_SESSION['alunos'])) { ?>
                            <?php for ($i = 0; $i < count($_SESSION['alunos']); $i++) { ?>
                                <td><?php echo $_SESSION['alunos'][$i]['codigo']; ?></td>
                                <td><?php echo $_SESSION['alunos'][$i]['nome']; ?></td>
                                <td>
                                    <a href="editar.php?codigo=<?php echo $i; ?>" class="btn btn-primary btn-xs">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>

                                    <a href="excluir.php?codigo=<?php echo $i; ?>" class="btn btn-danger btn-xs">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

