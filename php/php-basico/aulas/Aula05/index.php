<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funcoes Aritemeticas em PHP</title>
        <style>
            h2 {
                font: 12pt Arial;
                color: #171559;
            }
        </style>
    </head>
    <body>
        <?php
        
            $n1 = 9;;
            $n2 = 4;
           
            $s = $n1 + $n2;
            $qtd = 5;
            $media = ($n1 + $n2)/$qtd;
                           
            echo "<p>A soma é $s</p>";
            echo "<p>A soma vale ".($n1+$n2)."</p>";
            //Mesmo esquema para os demais
            echo "<p>O modulo vale " .($n1%$n2)."</p>";    
        
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "<p>O valor absoluto de $v2 é " . abs($v2) . "</p>";
            echo "<p>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2) . "</p>";
            echo "<p>O valor de $v1 em moeda é R$" . number_format($v1,2,",",".") . "</p>";
        
        
                   
        
        ?>
    </body>
</html>
