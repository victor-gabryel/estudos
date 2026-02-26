<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $idade = (int)18;
            $nome = 'Gustavo';
            $reais = 4.5;
            
            //concactenação
            
            echo '<p>' .$nome. ' tem '. $reais. ' reais! </p>'; //com aspas simples
            echo "<p> $nome tem $idade anos!</p>"; //com aspas duplas
        ?>
    </body>
</html>
