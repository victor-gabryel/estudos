<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2)/2;
            echo "<p>A média entre $nota1 e $nota2 é $m</p>";
            
            echo "<p>Esse aluno está " . (($m>=6)?"Aprovado":"Reprovado") . " </p>";
                    
        ?>
    </body>
</html>
