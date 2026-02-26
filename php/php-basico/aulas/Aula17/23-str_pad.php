<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $nome = "Guanabara";
            $novo1 = str_pad($nome,30," ",STR_PAD_RIGHT);
            $novo2 = str_pad($nome,30," ",STR_PAD_LEFT);
            $novo3 = str_pad($nome,30," ",STR_PAD_BOTH);
            
            echo "Meu professor $novo1 é lindo!";
            echo '<br>';
            echo "Meu professor $novo2 é lindo!";
            echo '<br>';
            echo "Meu professor $novo3 é lindo!";
         
        ?>
    </body>
</html>
