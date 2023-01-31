<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
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
            $valor = $_GET["v"];
            echo "O valor enviado foi $valor";
            echo "<br/>Raiz quadrada de $valor = ". sqrt($valor);
        ?>
    </div>
</body>
</head>
</html>