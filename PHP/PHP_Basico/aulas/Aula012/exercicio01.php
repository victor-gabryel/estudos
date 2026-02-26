<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $c = 0;
        do {
        echo "$c ";
        $c+= 2;
        } while ($c <= 20);
        
        echo "<br><br>";
        
        $c = 10;
        do {
        echo "$c ";
        $c--;
        } while ($c >= 1);
        
        ?>
    </body>
</html>
