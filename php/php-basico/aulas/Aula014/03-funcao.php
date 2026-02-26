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
            function soma() {
                $p = func_get_arg();
                $t = func_num_args();
                $s = 0;
                
                for($i=0; $i<$t; $i++) {
                    $s += $p[$i];
                }
                return $s;
            } 
            
            $r = soma(3, 5, 2, 2, 5);
            echo "A soma dos valores é $r";           
        ?>
    </body>
</html>
