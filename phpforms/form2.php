<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
        h4{
            font-size: 15pt;
            margin: 0px;
        }
    </style>
</head>
<body>
<div>
    <?php
    	$nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO CONFIGURADO]";
    	$ano = isset($_GET["ano"])?$_GET["ano"]:0;
    	$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[NÃO INFORMADO]";
    	$idade = date("Y") - $ano;
    	echo "$nome é $sexo e tem $idade anos"; 
    ?>
    <a href="../HTMLform2.html">Voltar</a>
</div>
</body>
</html>
 