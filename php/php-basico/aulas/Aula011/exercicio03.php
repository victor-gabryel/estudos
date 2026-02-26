<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php    
            $i = isset($_GET["i"])?$_GET["i"]:1;
            $f = isset($_GET["f"])?$_GET["f"]:1;
            $c = isset($_GET["c"])?$_GET["c"]:1;
            
            if ($i < $f) {
              while ($f >= $i) {
              echo "$i ";
              $i = $i+$c;}   
            } else if ($i > $f) {
                while ($i >= $f) {
                echo "$i ";
                $i = $i-$c;}      
            }       
        ?>
      
        <p><a href="exercicio03.xhtml">Voltar</a></p>
        
    </body>
</html>
