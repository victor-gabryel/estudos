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
            $n = isset($_GET["num"])?$_GET["num"]:1;   
            for ($c = 1; $c <= 10; $c++) {
                $r = $c * $n;
                echo "$n X $c = $r<br>";
            }
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </body>
</html>
