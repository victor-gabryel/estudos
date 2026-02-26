<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $atual = $_GET["at"];
            $anterior = $_GET["an"];
            
            echo "<p>O ano atual é $atual e o ano anterior é " . --
                    $atual ."</p>";
        
        ?>
    </body>
</html>
