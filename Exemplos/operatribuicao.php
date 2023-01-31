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
        echo "<h4>TESTE OPERADORES DE ATRIBUIÇÃO</h4><br/>";
        echo "Exercicio1: <br/>";
        $preco = $_GET["p"];
        echo "Preço é igual a R$ ". (number_format($preco,2,",",".")); 
        $aumento = ($preco * 10)/100;
        echo "<br/>Preço com 10% de aumento = R$ ". (number_format($preco + $aumento,2,",",".")); 
        $preco -= ($preco*10)/100;
        echo "<br/>Preço com 10% de desconto = R$ ". number_format($preco,2,",",".");
        echo "<br/>Exercicio2: ";
        $anoatual = $_GET["aa"];
        echo "<br/>Ano atual - $anoatual";
        $anoanterior = --$anoatual;
        echo "<br/>Ano anterior - $anoanterior";
        echo "<br/>-----------------------------------------------------------------";
    ?>
    </div>
</body>
</head>
</html>