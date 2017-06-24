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
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
		$n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
		$media = ($n1+$n2)/2;
		echo "A média entre $n1 e $n2 é $media.<br/>";
		if ($media<5){
			$sit = "REPROVADO";
		}
		elseif ($media>=5 && $media<7){
			$sit = "RECUPERAÇÃO";
		}
			else{
			$sit = "ARPOVADO";
			}
		echo "E a situação do aluno é $sit.";
	
    ?>
</div>
</body>
</html>
 