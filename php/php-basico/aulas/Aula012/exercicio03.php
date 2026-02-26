<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $v = isset($_GET["v"])?$_GET["v"]:1;
            
            $c = 1;
            while ($c <= 10) {
                echo "$c"." X "."$v"." = ".$c*$v."<br>";
                $c++;
            }         
        ?>
        
        <p><a href="exercicio03.xhtml">Voltar</a></p>
        
    </body>
</html>
