<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <title>Testando PHP</title>
    <style>
        h4{
            font-size: 15pt;
            margin: 0px;
        }
    </style>
<body>
    <div>
    <?php
        echo "<h4>TESTE VARIÁVEIS E OPERADORES</h4><br/>";
        $nome = "Daniel";
        $idade = 17;
        echo "$nome tem $idade anos";
        $n1 = 5;
        $n2 = 10;
        echo "<br/>$n1 + $n2 = ". ($n1 + $n2);
        echo "<br/>$n1 X $n2 = ". ($n1 * $n2);
        echo "<br/>$n1 - $n2 = ". ($n1 - $n2);
        echo "<br/>$n1 / $n2 = ". ($n1 / $n2);
        echo "<br/>Módulo(resto da divisão inteira) de $n1 por $n2 = ". ($n1 % $n2);
        echo "<br/>-----------------------------------------------------------------";
    ?>
    </div>
</body>
</head>
</html>