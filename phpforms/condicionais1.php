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
		$ano = isset($_GET['ano'])?$_GET['ano']:1900;
		$idade = date("Y") - $ano;
		if($idade >= 18){
			echo "Você pode votar e dirigir, pois possui $idade anos, portanto é maior de idade";
		}
		else{
			echo "Você não pode votar e dirigir, pois possui $idade anos, portanto é menor de idade.";
		}			
	?>
	<a href="../condicionais1.html">Voltar</a>
</div>
</body>
</html>
 