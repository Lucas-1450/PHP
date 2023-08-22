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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        echo "<h1>Analisando o número $n</h1>";
        
        $mult = 0;
        for ($c = 1; $c <= $n; $c++ ){
          if ($n % $c == 0){
            $mult++;
            Echo "$c ";
          }
          
        }
        echo "<p>Quantidade de numeros multiplos: $mult";
        echo "<h2>Resultado: $n <span class='foco'>";
        if($mult <= 2){
          echo "É PRIMO!";
        } else {
          echo "NÃO É PRIMO!";
        }

        echo "</span></h2>";
        
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 