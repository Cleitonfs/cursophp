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
		$a = $_GET["a"];
		$b = $_GET["b"];
		if ($a>$b){ $maior = $a;
		}
		else{$maior = $b;
		}
		echo "O maior valor é $maior"
    ?>
</div>
</body>
</html>