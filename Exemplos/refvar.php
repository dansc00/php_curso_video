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
        echo "<br/><h4>REFERÊNCIA ENTRE VARIÁVEIS</h4>";
        $a = 10;
        $b = &$a;
        echo "<br/>Exercicio3:";
        echo "<br/>A vale $a e B vale $b pois estão referenciadas";
        $a = ++$a;
        echo "<br/>A recebeu 1: A = $a , B = $b";
        echo "<br/>Exercicio4: Variáveis de variáveis ou Variáveis variantes";
        $x = "ola";
        $$x = "tchau";
        echo "<br/>x = $x e ola = $ola"; //$ola foi criada na linha 69
        echo "<br/>-----------------------------------------------------------------";
    ?>
    </div>
</body>
</head>
</html>