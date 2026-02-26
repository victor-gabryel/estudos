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
    <div>
        <form method="get" action="">
        <?php
        $c= 1;
        while ($c <= 5) {
            echo ";Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br>";
            $c++;
        }
            
        ?> 
            <input type="submit" value="Enviar"/>  
            
        <?php
        
            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                $num = "v".$i;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;
            }
            
            echo "$num1 $num2 $num3 $num4 $num5";
        
        ?>
            
        </form>
    </div>
    </body>
</html>
