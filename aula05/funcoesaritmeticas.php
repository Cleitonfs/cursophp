<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
  <title>Funcoes Aritmeticas </title>
  <style>
    h2 {
        font: 15pt Arial;
        color: #b2482a;
        font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 e " . abs($v2);
        echo "</br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);

    ?>
</div>
</body>
</html>

