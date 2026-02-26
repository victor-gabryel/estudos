<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $p = "Leite";
            $pr = 4.5;
            echo "O $p custa R$$ " . number_format($pr,2);
            echo "<br>";
            printf("O %s custa R$ %.2f reais",$p,$pr);
        
        ?>
    </body>
</html>
