<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
        
            $v = array( "nome" => "Ana",
                        "idade" => 23,
                        "peso" => 65.5);
            foreach ($v as $k => $c) {
                echo "O campo $k possui o conteudo $c<br>";
            }
        
        ?>
    </pre>
    </body>
</html>
