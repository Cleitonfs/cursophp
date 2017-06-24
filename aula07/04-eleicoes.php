<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
		$ano = $_GET["an"];
		$idade = 2017 -$ano;
		$tipo = ($idade>=18 and $idade<65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
		echo "Você tem $idade anos de idade. <br/>";
		echo "Seu voto é do tipo $tipo!";
		
    ?>
</div>
</body>
</html>