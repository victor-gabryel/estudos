<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $a = 3;
            $b = $a;
            $b += 5;
            echo "<p>A variável A vale $a</p>";
            echo "<p>A variável B vale $b</p>";
            
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "<p>A variável A vale $a</p>";
            echo "<p>A variável B vale $b</p>";
   
        ?>
    </body>
</html>
