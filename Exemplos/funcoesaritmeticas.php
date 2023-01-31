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
        echo "<br/><h4>TESTE PASSAGEM DE PARÂMETROS E FUNÇÕES ARITMÉTICAS</h4><br/>";
        $x = $_GET["a"];
        $y = $_GET["b"];
        echo "Valores passados: $x e $y<br/>";
        $yabs = abs($y);
        $pot = pow($x,$y);
        $raiz = sqrt($x);
        $arredonda = round($y); /* ceil() para cima / floor() para baixo */
        $inteiro = intval($y);
        $moeda = number_format($y,2,",",".");
        echo "Valor absoluto de $y = $yabs<br/>";
        echo "Resultado de $x<sup>$y</sup> = $pot<br/>";
        echo "Raiz quadrada de $x = $raiz<br/>";
        echo "$y arredondado = $arredonda<br/>";
        echo "Parte inteira de $y = $inteiro<br/>";
        echo "$y em reais = R$$moeda<br/>";
        echo "<br/>-----------------------------------------------------------------";
    ?>
    </div>
</body>
</head>
</html>