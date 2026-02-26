<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            function teste($x) { //Por Valor
                $x += 2;
                echo "<p>O valor de X é $x</p>";
            }
            
            $a = 3;
            teste($a);
            echo "O valor de A é $a";
           
        ?>
    </body>
</html>
