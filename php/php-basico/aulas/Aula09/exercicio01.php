<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <div>
        
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "<p>Voçê nasceu em $a e tem $i anos</p>";
            
            if($i >= 18){
                $v = "já pode votar";
                $d = "já pode dirirgir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }
            
            echo "<p>Com essa idade voçê $v e $d!</p>";
            
            
        ?>
        
        
        <p><a href="exercicio01.html">Voltar</a></p>
        
    </div>
    </body>
</html>
