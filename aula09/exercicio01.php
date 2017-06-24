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
		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;
		echo "Voce nasceu em $a e tem $i anos.<br/>";
		if ($i>=18){
			$v = "ja pode votar";
			$d = "ja pode dirigir";
		}
		else {
			$v = "Nao pode votar";
			$d = "Não pode dirigir";
		}
		echo "Com essa idade voce $v e tambem $d.";
    ?>
</div>
</body>
</html>