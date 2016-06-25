<ul>
    <?php 
    
    for($i = 0; $i <= 1000; $i++)
    {
        echo "<li>Nome $i</li>";
    }
    
    $inteiro = 0;
    
    while($inteiro < 50)
    {
        echo "Numero $inteiro <br/>";
        
        $inteiro++;
    }
    ?>
    
    <table border="1">
        <tr>
            <td>Codigo</td>
            <td>Nome</td>
            <td>Valor</td>
        </tr>
        <?php 
        for($i =0; $i <= 3000; $i++) 
        {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <?php
                    if($i == 1000){
                        echo "Guarana";
                    }else {
                        echo "Coca cola";
                    }
                ?>
            </td>
            <td><?php echo rand(5,10); ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</ul>
