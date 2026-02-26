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
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:0;
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem Sexo]";
            $idade = date("Y") - $ano;
            echo "<p>$nome é $sexo e tem $idade anos</p>";
        ?>
        
        <p><a href="02exercicio.html">Voltar</a></p>
        
    </body>
</html>
