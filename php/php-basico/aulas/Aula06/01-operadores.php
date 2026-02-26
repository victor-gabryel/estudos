<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $preco = $_GET["pre"];
            $porc = $_GET["por"];
         
            echo "<p>O preço do produto é R$ " . number_format($preco, 2) . "</p>";
            
            //$preco = $preco + ($preco*$porc/100);
            //$preco += ($preco*$porc/100); 
            //echo "<p>E o novo preço com $porc% de aumento será R$ " . number_format($preco, 2) . "</p>";
            
            //$preco = $preco - ($preco*$porc/100);
            $preco -= ($preco*$porc/100); 
            echo "<p>E o novo preço com $porc% de desconto será R$ " . number_format($preco, 2) . "</p>";
            
        ?>
    </body>
</html>
