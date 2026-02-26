<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "<p>Os valores passados foram $n1 e $n2</p>";
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
            echo "<p>O resultado será $r</p>";

        ?>
    </body>
</html>
