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
       // VARIAVEIS DE VARIÁVEIS.

       $x = "abc";
       $$x = "def"; // Atribui o nome da variável o conteúdo de "x" ou seja "abc ---> $abc = "def"

       echo "A variável x recebe $x";
       echo "<br> e a variável abc recebe $abc";


    ?>
</div>
</body>
</html>