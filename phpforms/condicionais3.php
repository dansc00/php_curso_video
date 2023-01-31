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
		a#voltar{
			color: #42447AFF;
		}
	</style>
</head>
<body>
<div>
	<?php
		$nota1 = isset($_GET['nota1'])?$_GET['nota1']:0;
		$nota2 = isset($_GET['nota2'])?$_GET['nota2']:0;
		$media = ($nota1 + $nota2)/2;
		if ($media < 5){
			$sit = "REPROVADO";
		}
		elseif ($media >= 5 and $media < 7){
			$sit = "de RECUPERAÇÃO";
		}
		elseif ($media >= 7){
			$sit = "APROVADO";
		}
		echo "O aluno(a) obteve as notas ". number_format($nota1,1). " e ". number_format($nota2,1);
		echo "</br>Sua média foi ". number_format($media,1). " e portanto ele está $sit";
	?>
	<a id="voltar" href="../condicionais3.html">Voltar</a>
</div>
</body>
</html>
 