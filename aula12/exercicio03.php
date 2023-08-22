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
        $t = 1;

        echo "<h1>Mostrando a tabuada de $n:</h1>";

        do {
          $res = $n * $t;
          
          echo "<br>$n x $t = $res";
          $t ++;
        } while ($t <= 10);
                  
        
        
    ?>
    <br>
    <a href="exercicio03.html">Voltar
    </a>
</div>
</body>
</html>
 