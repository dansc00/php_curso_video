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
		if($idade < 16){
			$voto = "não pode votar";	
		}
		elseif(($idade >= 16 and $idade < 18) or ($idade > 65)){
			$voto = "não é obrigado a votar";
		}
		else{
			$voto = "é obrigado a votar";	
		}			
		echo "Você possui $idade anos, portanto $voto.";
	?>
	<a href="../condicionais2.html">Voltar</a>
</div>
</body>
</html>
