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
		$idade = date("Y") - $a;
		echo "Voce nasceu em $a e tem $idade anos.<br/>";
		if ($idade<16){
			$tipoVoto = "não vota";
		}
		elseif(($idade>=16 && $idade<18) || ($idade >65)){
			$tipoVoto = "voto opcional";
		}
		else{
			$tipoVoto = "voto obrigatório";
		}		
		echo "Com essa idade:  $tipoVoto.";
    ?>
</div>
</body>
</html>