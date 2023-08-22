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
        $preco = $_GET['p'];
        
        echo "O preço recebido é R$:". number_format($preco, 2,',' ,'.');

        $preco -= $preco  * 10/100; /** DESCONTO DE 10%  - > LEMBRANDO QUE EQUIVALE A $preco = $preco - ($preco * 10/100);*/

        echo "<br>O valor final com 10% de desconto é R$:". number_format($preco, 2,',' ,'.');

        $pcj = $_GET['j'];

        echo "<br>O preço recebido para ser calculado com júros é R$:". number_format($pcj, 2,',' ,'.');

        $pcj += $pcj * 10/100; /** ACRÉSSIMO DE 10%  -> LEMBRANDO QUE EQUIVALE A $pcj = $pcj + ($pcj * 10/100;)*/

        echo "<br>O preço com 10% de juros é R$:". number_format($pcj, 2,',' ,'.');

    ?>
</div>
</body>
</html>
 