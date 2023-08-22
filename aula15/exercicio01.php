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
        function teste (&$x){
          $x += 2;
          echo "O valor de x é $x<br>";
        }

        $a = 3;
        teste ($a);
        echo "O valor de a é $a"; 
    ?>
</div>
</body>
</html>
 