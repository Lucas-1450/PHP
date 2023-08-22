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
        function teste ($x){ // Passagem de parâmetro por valor.
          $x += 2;
          echo $x;
        }

        $a = 3;
        teste ($a);
        echo $a; // Vai escrever 3.

        function teste (&$x){ // passagem de parâmetro por referência.
          $x += 2;
          echo $x;
        }

        $a = 3;
        teste ($a);
        echo $a; // Vai escrever 5.
    ?>
</div>
</body>
</html>
 