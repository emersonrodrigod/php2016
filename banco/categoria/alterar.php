<?php
 $conexao = new mysqli('localhost', 'root', '', 'emerson');
 
 $id = $_GET['id'];
 
 $sql = "select * from produtos where id = $id";
 $query = $conexao->query($sql);

 $resultado = $query->fetch_array();
 
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
            
            <form method="post" action="processaAlteracao.php">
             
                <input type="hidden" name="id" value="<?php echo $resultado['id'];?>" />
                
                <div class="form-group">
                    <label class="control-label">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome'];?>">
                </div>
                
                <div class="form-group">
                    <label class="control-label">Preço</label>
                    <input type="text" class="form-control" name="preco" value="<?php echo $resultado['preco'];?>">
                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Salvar">
                    
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
                
            </form>
            
        </div>
        
    </body>
</html>

