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
        
            function soma ($a, $b) {
                $s = $a + $b;
                return $s;
            }
            
            $x = 3;
            $y = 4;
            
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual à $r";
        
        ?>
    </body>
</html>
