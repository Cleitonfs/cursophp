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
        $n = isset($_GET["num"])?$_GET["num"]:0;
		$o = isset($_GET["oper"])?$_GET["oper"]:1;
		switch ($o){
			case 1:
				$r=$n*2;
				break;
			case 2:
				$r=pow($n,3);
				break;
			case 3:
				$r=sqrt($n);
		}
		
		echo "O resultado da operação solicitada é: <span class='foco'>$r</span><br/><br/>";	
    ?>
	<a href="exercicio01.html" style= "font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			color: #050505;
			padding: 10px 20px;
			background: -moz-linear-gradient(
				top,
				#ffffff 0%,
				#c7d95f 50%,
				#add136 50%,
				#6d8000);
			background: -webkit-gradient(
				linear, left top, left bottom,
				from(#ffffff),
				color-stop(0.50, #c7d95f),
				color-stop(0.50, #add136),
				to(#6d8000));
			-moz-border-radius: 14px;
			-webkit-border-radius: 14px; border-radius: 14px;
			border: 1px solid #6d8000;
			-moz-box-shadow:
				0px 1px 3px rgba(000,000,000,0.5),
				inset 0px 0px 2px rgba(255,255,255,1);
			-webkit-box-shadow:
				0px 1px 3px rgba(000,000,000,0.5),
				inset 0px 0px 2px rgba(255,255,255,1);
			box-shadow:
				0px 1px 3px rgba(000,000,000,0.5),
				inset 0px 0px 2px rgba(255,255,255,1);
			text-shadow:
				0px -1px 0px rgba(000,000,000,0.2),
				0px 1px 0px rgba(255,255,255,0.4);">Voltar</a>
</div>
</body>
</html>
 