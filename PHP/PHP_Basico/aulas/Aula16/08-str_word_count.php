<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
           $frase = "Eu vou estudar PHP agora";
           $cont = str_word_count($frase,0);
           print_r($cont);
           
           echo '<br><br>';
           
           $cont = str_word_count($frase,1);
           print_r($cont);
           
           echo '<br><br>';
           
           $cont = str_word_count($frase,2);
           print_r($cont);
       
        ?>
    </body>
</html>
