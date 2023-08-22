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
       // VARIAVEIS REFERENCIADAS.

       $a = 3;
       $b = $a;
       $b += 5;

       echo "A variável a vale $a";
       echo "<br>A variável b vale$b";

       $c = 3;
       $d = &$c;
       $d += 5;

       echo "<br>A variável c vale$c";
       echo "<br>A variável d vale$d";
    ?>
</div>
</body>
</html>