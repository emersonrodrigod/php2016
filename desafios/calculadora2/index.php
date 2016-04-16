<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form method="post" action="">

            <label>valor 1</label>
            <input type="text" name="valor1">

            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <label>valor 2</label>
            <input type="text" name="valor2">

            <input type="submit" value="calcular">

        </form>

        <?php
        if (isset($_POST['valor1'])) {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $operador = $_POST['operador'];

            if ($operador == '+') {
                $resultado = $valor1 + $valor2;
            }

            if ($operador == '-') {
                $resultado = $valor1 - $valor2;
            }

            if ($operador == '*') {
                $resultado = $valor1 * $valor2;
            }

            if ($operador == '/') {
                if ($valor2 == 0) {
                    echo "Não´e possivel realizar uma divisao por zero";
                } else {
                    $resultado = $valor1 / $valor2;
                }
            }

            if (isset($resultado)) {
                echo "$valor1 $operador $valor2 = $resultado";
            }
        }
        ?>
    </body>
</html>
