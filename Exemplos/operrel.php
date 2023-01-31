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
        echo "<h4>OPERADORES RELACIONAIS</h4>";
        echo "<br/>Exercicio1: ";
        $x = $_GET["x"];
        $y = $_GET["y"];
        $tipo = $_GET["op"];
        echo "<br/>Valores passado  $x e $y";
        $r = ($tipo == "s")?$x+$y:$x*$y;
        echo "<br/>O resultado é $r";
        echo "<br/>Exercicio2: ";
        $z = 2;
        $w = "2";
        $re = ($z === $w)?"SIM":"NÃO";
        echo "<br/>$z é igual a $w? $re";
        echo "<br/>Exercicio3: ";
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1 + $n2)/2;
        $sit = ($m > 5)?"APROVADO":"REPROVADO";
        echo "<br/> Média maior que 5 - APROVADO | Média menor que 5 - REPROVADO";
        echo "<br/>O aluno tirou notas $n1 e $n2, sua média foi $m e portanto ele foi $sit";
        echo "<br/>Exercicio4: ";
        $id = $_GET["id"];
        $vot = ($id >= 18 and $id < 65)?"É OBRIGADO":"NÃO É OBRIGADO";
        echo "<br/>O eleitor possui $id anos, portanto ele $vot a votar";
    ?>
    </div>
</body>
</head>
</html>