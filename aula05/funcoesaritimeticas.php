<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h2{
            font: 12pt Arial;
            color: #171559;
            font-weight: bold;

        }
    </style>
    <title>Funções aritméticas</title>
</head>

<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2.</h2>";
        echo "O valor absoluto de $v2 é: ".abs($v2);  /** abs() - Valor absoluto */
        echo "O valor de $v1<sup>$v2</sup> é: " . pow($v1, $v2) ; /** pow() - Potencialização do primeiro parâmetro elevado ao segundo parâmetro separado por vírgula */
        echo "<br>A raíz quadrada de $v1 é igual a: " . sqrt($v1); /** sqrt() - Raíz quadrada do parâmetro recebido */
        echo "<br>O valor de $v2 arredondado é: " . round($v2); /** round() - Arredonda o parâmetro recebido (a palavra round pode ser substituída por "ceil"[arredonda pra cima] ou "floor"[arredonda pra baixo].) */
        echo "<br>A parte inteira de $v2 é: " . intval($v2); /** intval() - Considera apenas a parte inteira do número real da variável passada */
        echo "<br>O valor de $v1 em moeda é: R$" . number_format($v1, 2, ",", "."); /** number_format() - para formatar valres. o segundo parâmetro é o número de casas decimais, o terceiro é separação de decimal ","(br) e o quarto separação de milhar "." */
     ?>
</div>
</body>
</html>