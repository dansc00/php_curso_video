<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <?php
  		$texto = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
  		$tamanho = isset($_GET["tam"])?$_GET["tam"]:"14pt";
  		$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";	
  ?>
  <style>
        h4{
            font-size: 15pt;
            margin: 0px;
        }
		span.estilo{
			font-size: <?php echo $tamanho; ?>;
			color: <?php echo $cor; ?>;
		}
    </style>
</head>
<body>
<div>
    <?php
    	echo "<span class='estilo'>$texto</span>";
    	
    ?>
    <a href="../HTMLform3.html">Voltar</a>
</div>
</body>
</html>
 