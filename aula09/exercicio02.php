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
        $a = isset($_GET["ano"])?$_GET["ano"]:1990;
        $i = date("Y") - $a;

        echo "Você nascido em $a tem $i anos.";

        if ($i < 16){
          $v = "não vota";
        }
        elseif (($i >=16 && $i < 18) || ($i > 65)){
          $v = "vota se quiser";
        }
        else {
          $v = "é obrigado a votar";
        }
        

        echo "<br><br>Você $v!"
    ?>
    <br><br>
    <a href="exercicio02.html">Voltar</a>
</div>
</body>
</html>
 