<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        
        switch ($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n); // $n ^ (1/2);
                break;
            default:
         }
         
        echo "<p>O resultado da operação é <span>$r</span></p>";    
        
        ?>
        
        <p><a href="exercicio01.html">Voltar</a></p>
        
    </body>
</html>
