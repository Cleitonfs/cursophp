<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Simple</title>
</head>
<body>
<div>
<h1>A simple web page</h1>
<ul>
    <li>List item one</li>
    <li>List item two</li>

    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "A soma entre $v1 e $v2 é: " . ($v1+$v2)
    ?>

</ul>
</div>
</body>
</html>

