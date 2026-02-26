<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <div>
        
        <form method="get" action="02-tabuada.php">  
            <select name="num">
                <?php
                    for ($c = 1; $c <= 10; $c++){
                        echo "<option>$c</option>";
                    }    
                ?>      
            </select>
            <input type="submit" value="Tabuada"/>
            
        </form>     
    </div>
    </body>
</html>
