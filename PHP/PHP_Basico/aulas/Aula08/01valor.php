<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            $valor = $_GET["v"];
            
            $rq = sqrt($valor);
            
            echo "<p>A raiz quadrada de $valor é igual à " . number_format($rq,2). "</p>";
            
        ?>
        
        <p><a href = "01exercicio.html">Voltar</a></p>
        
    </body>
</html>
