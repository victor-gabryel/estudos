<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        $c = 10;
        $v = $c;
        $fat = 1;
        do {  
            $fat = $fat * $c; 
            $c--;
        } while ($c >= 1);
        echo "<p>O fatorial de $v é igual a $fat</p>";
        
        ?>
    </body>
</html>
