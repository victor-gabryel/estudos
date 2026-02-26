<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
        
            $v = array( 4 => 5,
                        2 => 9,
                        7 => 8,
                        10 => 7);
            
            unset($v[2]);
            print_r($v);
        
        ?>
    </pre>
    </body>
</html>
