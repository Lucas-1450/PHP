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
        /* OPERADORES LÓGICOS
        and ou &&   
        or ou ||
        xor --> não pode ser os dois Falsos ou os dois verdadeiros
        <> ou !=
        */

        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade";

        $tipo = ($idade >=18 && $idade <= 64)?"obrigatório":"Não obrigatório";
        echo "<br>E dessa forma seu voto é $tipo";    

    ?>
</div>
</body>
</html>