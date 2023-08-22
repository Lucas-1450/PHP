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
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $med = ($n1 + $n2) / 2;

        echo "Você ficou com $med nesta matéria.<br>";

        if ($med <4 ){
          $res = "Você foi reprovado!";
        }
        elseif ($med >= 4 && $med< 6){
          $res = "Você irá para recuperação";
        }
        else{
          $res = "Você foi aprovado!";
        }

        echo "$res";

    ?>
    <br><br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
 