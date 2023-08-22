<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operações aritméticas</title>
</head>

<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2 <br></h2>";
        $s = $n1 + $n2;
        $sub = $n1 - $n2;
        $mul = $n1 * $n2;
        $div = $n1 / $n2;
        $res = $n1 % $n2;
        $m = ($n1 + $n2) / 2;

        echo "A soma entre $n1 e $n2 é igual a $s. A subtração entre os mesmos é igual a $sub. A multiplicação entre ambos é igual a $mul. E
        a divisão de $n1 por $n2 é igual a $div<br> A média entre os números é $m";
     
     ?>
</div>
</body>
</html>