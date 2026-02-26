<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $n1 = isset($_GET["n1"])?$_GET["n1"]:5;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:5;
        $m = ($n1+$n2)/2;
        
        if($m >= 7){
            $sit = "Aprovado";
        } elseif($m < 7 && $m >= 5) {
            $sit = "Em recuperação";
        } else {
            $sit = "Reprovado";
        }
        
        echo "<p>A médias da notas $n1 e $n2 é $m</p>";
        echo "<p>Situação do Aluno é: $sit</p>";
                      
        ?>
        
        <p><a href="exercicio03.html">Voltar</a></p>
        
    </body>
</html>
