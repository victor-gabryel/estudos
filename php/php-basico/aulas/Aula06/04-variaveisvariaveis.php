<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $x = "abc";
            $$x = "def";
            echo "<p>O conteúdo da variável X é $x</p>";
            echo "<p>A variável criada recebeu o valor $abc</p>";
             
        ?>
    </body>
</html>
