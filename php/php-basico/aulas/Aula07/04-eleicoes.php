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

            $anonas =  $_GET["nas"];
            $anoatual = $_GET["at"];
       
            $idade = $anoatual - $anonas;
       
            echo "<p>Quem nasceu em $anonas tem idade de $idade anos</p>";
            
            $tipo = ($idade >= 18 && $idade<=65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
            
            echo "Seu voto é $tipo";

        ?>
    </body>
</html>
