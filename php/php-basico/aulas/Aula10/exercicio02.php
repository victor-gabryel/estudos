<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $d = isset($_GET["ds"])?$_GET["ds"]:0;
            
            switch ($d){
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:    
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                default:
                    echo "Dia da semana ínvalido";
            }
        
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </body>
</html>
