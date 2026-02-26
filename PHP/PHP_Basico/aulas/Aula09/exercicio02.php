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
            
            if ($i < 16){
                $tipoVoto = "não pode votar";
            } elseif (($i >= 16 && $i <18) || ($i > 65)){
                $tipoVoto = "opcional";
            } else {
                $tipoVoto = "obrigatorio";
            }
            
            echo "<p>Para essa idade, seu tipo de voto é $tipoVoto</p>"; 
        ?>
        
        
        <p><a href="exercicio02.html">Voltar</a></p>
        
    </div>
    </body>
</html>
